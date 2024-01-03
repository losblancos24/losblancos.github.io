<?php

use PrestaShop\PrestaShop\Core\Payment\PaymentOption;

if (!defined('_PS_VERSION_'))
    exit;

class Shopeepay extends PaymentModule 
{

    private $_html = '';
    private $_postErrors = array();
    public $merchant_code;
    public $api_key;

    public function __construct() {
        $this->name = 'shopeepay';
        $this->tab = 'payments_gateways';
        $this->version = '2.1.4';
        $this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);
        $this->author = 'Kharisma Catur Mandala';
        $this->controllers = array('payment', 'validation');
        $this->is_eu_compatible = 1;

        $this->currencies = true;
        $this->currencies_mode = 'checkbox';

        $config = Configuration::getMultiple(array('DUITKU_SHOPEEPAY_MERCHANTCODE', 'DUITKU_SHOPEEPAY_APIKEY'));
        if (!empty($config['DUITKU_SHOPEEPAY_MERCHANTCODE']))
            $this->merchant_code = $config['DUITKU_SHOPEEPAY_MERCHANTCODE'];
        if (!empty($config['DUITKU_SHOPEEPAY_APIKEY']))
            $this->api_key = $config['DUITKU_SHOPEEPAY_APIKEY'];
		if (!empty($config['DUITKU_SHOPEEPAY_URL']))
            $this->api_key = $config['DUITKU_SHOPEEPAY_URL'];
		if (!empty($config['DUITKU_SHOPEEPAY_EXPIRED']))
            $this->api_key = $config['DUITKU_SHOPEEPAY_EXPIRED'];

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('QRIS by ShopeePay'); //Title Backend / Admin
        $this->description = $this->l('Accept payments for your products via Duitku.');
        $this->confirmUninstall = $this->l('Are you sure about removing these details?');
        if (!isset($this->merchant_code) || !isset($this->api_key))
            $this->warning = $this->l('MERCHANT_CODE and API_KEY details must be configured before using this module.');
        if (!count(Currency::checkPaymentCurrencies($this->id)))
            $this->warning = $this->l('No currency has been set for this module.');
    }

     public function install()
    {
        if (!parent::install() || !$this->registerHook('paymentReturn') || !$this->registerHook('paymentOptions')) {
            return false;
        }
        return true;
    }

    public function uninstall() {
        if (!Configuration::deleteByName('DUITKU_SHOPEEPAY_MERCHANTCODE') || !Configuration::deleteByName('DUITKU_SHOPEEPAY_URL') || !Configuration::deleteByName('DUITKU_SHOPEEPAY_APIKEY') || !Configuration::deleteByName('DUITKU_SHOPEEPAY_EXPIRED') || 
		!Configuration::deleteByName('DUITKU_SHOPEEPAY_SUCCESS_STATUS') || !Configuration::deleteByName('DUITKU_SHOPEEPAY_FAILURE_STATUS') || !parent::uninstall())
            return false;
        return true;
    }

    private function _postValidation() {
        if (Tools::isSubmit('btnSubmit')) {
            if (!Tools::getValue('DUITKU_SHOPEEPAY_MERCHANTCODE'))
                $this->_postErrors[] = $this->l('Merchant code is required.');
            elseif (!Tools::getValue('DUITKU_SHOPEEPAY_APIKEY'))
                $this->_postErrors[] = $this->l('Api key is required.');
			elseif (!Tools::getValue('DUITKU_SHOPEEPAY_URL'))
                $this->_postErrors[] = $this->l('Url is required.');
			elseif (!Tools::getValue('DUITKU_SHOPEEPAY_EXPIRED') OR Tools::getValue('DUITKU_SHOPEEPAY_EXPIRED') > 60 )
                $this->_postErrors[] = $this->l('Expired is required! 1 - 60 ( minute )');
        }
    }

    private function _postProcess() {
        if (Tools::isSubmit('btnSubmit')) {
            Configuration::updateValue('DUITKU_SHOPEEPAY_MERCHANTCODE', Tools::getValue('DUITKU_SHOPEEPAY_MERCHANTCODE'));
            Configuration::updateValue('DUITKU_SHOPEEPAY_APIKEY', Tools::getValue('DUITKU_SHOPEEPAY_APIKEY'));
			Configuration::updateValue('DUITKU_SHOPEEPAY_URL', Tools::getValue('DUITKU_SHOPEEPAY_URL'));
			Configuration::updateValue('DUITKU_SHOPEEPAY_EXPIRED', Tools::getValue('DUITKU_SHOPEEPAY_EXPIRED'));
			Configuration::updateValue('DUITKU_SHOPEEPAY_SUCCESS_STATUS', Tools::getValue('DUITKU_SHOPEEPAY_SUCCESS_STATUS'));
			Configuration::updateValue('DUITKU_SHOPEEPAY_FAILURE_STATUS', Tools::getValue('DUITKU_SHOPEEPAY_FAILURE_STATUS'));
        }
        $this->_html .= $this->displayConfirmation($this->l('Settings updated'));
    }

    private function _displayShopeepay() {
        return $this->display(__FILE__, 'infos.tpl');
    }

    public function getContent() 
	{
        if (Tools::isSubmit('btnSubmit')) {
            $this->_postValidation();
            if (!count($this->_postErrors))
                $this->_postProcess();
            else
                foreach ($this->_postErrors as $err)
                    $this->_html .= $this->displayError($err);
        } else {
            $this->_html .= '<br />';
        }

        $this->_html .= $this->_displayShopeepay();
        $this->_html .= $this->renderForm();

        return $this->_html;
    }

    public function hookPaymentOptions($params) {
         if (!$this->active) {
            return;
        }

        if (!$this->checkCurrency($params['cart'])) {
            return;
        }

        $this->context->smarty->assign(
            array(
              'APP_BASE' => __PS_BASE_URI__
            )
          );

        // $logo_path = _PS_MODULE_DIR_.$this->name.'/logo.png';
        $newOption = new PaymentOption();
        $newOption->setModuleName($this->name)
                ->setCallToActionText($this->l('QRIS by ShopeePay')) //Title Frontend / Checkout
                ->setAction($this->context->link->getModuleLink($this->name, 'validation', array(), true))
                // ->setLogo(Media::getMediaPath($logo_path))
                ->setAdditionalInformation($this->fetch('module:shopeepay/views/templates/hook/shopeepay_intro.tpl'));
        $payment_options = [
            $newOption,
        ];

        return $payment_options;
    }

    public function hookPaymentReturn($params) {
        if (!$this->active)
            return;

        return $this->fetch('module:shopeepay/views/templates/hook/payment_return.tpl');
    }

    public function checkCurrency($cart) {
        $currency_order = new Currency($cart->id_currency);
        $currencies_module = $this->getCurrency($cart->id_currency);

        if (is_array($currencies_module))
            foreach ($currencies_module as $currency_module)
                if ($currency_order->id == $currency_module['id_currency'])
                    return true;
        return false;
    }

    public function renderForm() {		
		$order_states = array();
		foreach (OrderState::getOrderStates($this->context->language->id) as $state) {
			array_push($order_states, array(
				'id_option' => $state['id_order_state'],
				'name' => $state['name']
				)
			);
		}
		
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('SHOPEEPAY API DETAILS'),
                    'icon' => 'icon-envelope'
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->l('MERCHANT CODE'),
                        'name' => 'DUITKU_SHOPEEPAY_MERCHANTCODE',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('API KEY'),
                        'name' => 'DUITKU_SHOPEEPAY_APIKEY',
                    ),
					array(
                        'type' => 'text',
                        'label' => $this->l('URL'),
                        'name' => 'DUITKU_SHOPEEPAY_URL',
                    ),
					array(
                        'type' => 'text',
                        'label' => $this->l('EXPIRED PERIOD'),
                        'name' => 'DUITKU_SHOPEEPAY_EXPIRED',
                    ),
					array(
						'type' => 'select',
						'label' => 'Map payment SUCCESS status to:',
						'name' => 'DUITKU_SHOPEEPAY_SUCCESS_STATUS',
						'required' => true,	
						'options' => array(
							'query' => $order_states,
							'id' => 'id_option',
							'name' => 'name'
							),
						//'class' => ''
						),
					array(
						'type' => 'select',
						'label' => 'Map payment FAILURE status to:',
						'name' => 'DUITKU_SHOPEEPAY_FAILURE_STATUS',
						'required' => true,
						'options' => array(
							'query' => $order_states,
							'id' => 'id_option',
							'name' => 'name'
							),
						//'class' => ''
						),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                )
            ),
        );

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int) Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();
        $helper->id = (int) Tools::getValue('id_carrier');
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'btnSubmit';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false) . '&configure=' 
			. $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        return $helper->generateForm(array($fields_form));
    }

    public function getConfigFieldsValues() {
        return array(		
            'DUITKU_SHOPEEPAY_MERCHANTCODE' => Tools::getValue('DUITKU_SHOPEEPAY_MERCHANTCODE', Configuration::get('DUITKU_SHOPEEPAY_MERCHANTCODE')),
            'DUITKU_SHOPEEPAY_APIKEY' => Tools::getValue('DUITKU_SHOPEEPAY_APIKEY', Configuration::get('DUITKU_SHOPEEPAY_APIKEY')),
            'DUITKU_SHOPEEPAY_URL' => Tools::getValue('DUITKU_SHOPEEPAY_URL', Configuration::get('DUITKU_SHOPEEPAY_URL')),
            'DUITKU_SHOPEEPAY_EXPIRED' => Tools::getValue('DUITKU_SHOPEEPAY_EXPIRED', Configuration::get('DUITKU_SHOPEEPAY_EXPIRED')),
			'DUITKU_SHOPEEPAY_SUCCESS_STATUS' => Tools::getValue('DUITKU_SHOPEEPAY_SUCCESS_STATUS', Configuration::get('DUITKU_SHOPEEPAY_SUCCESS_STATUS')),
			'DUITKU_SHOPEEPAY_FAILURE_STATUS' => Tools::getValue('DUITKU_SHOPEEPAY_FAILURE_STATUS', Configuration::get('DUITKU_SHOPEEPAY_FAILURE_STATUS')),
        );
    }

}
