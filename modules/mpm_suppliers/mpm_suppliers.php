<?php

if (!defined('_PS_VERSION_')){
  exit;
}

class mpm_suppliers extends Module{

  private $_shopId;
  private $_langId;

  public function __construct()
  {
    $this->_shopId = Context::getContext()->shop->id;
    $this->_langId = Context::getContext()->language->id;
    $this->name = 'mpm_suppliers';
    $this->tab = 'front_office_features';
    $this->version = '1.0.1';
    $this->author = 'MyPrestaModules';
    $this->need_instance = 0;
    $this->bootstrap = true;

    parent::__construct();

    $this->displayName = $this->l('Suppliers');
    $this->description = $this->l('Suppliers block.');
    $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
  }

  public function install()
  {
    if (!parent::install()
      || !$this->registerHook('header')
      || !$this->registerHook('displayLeftColumn')
      || !$this->registerhook('displayHomeContent1')
      || !$this->registerhook('displayHomeContent2')
      || !$this->registerhook('displayHomeContent3')
      || !$this->registerhook('displayHomeContent4')
      || !$this->registerhook('displayHomeContent5')
      || !Configuration::updateValue('GOMAKOIL_SUPPLIER_HOME', 1)
      || !Configuration::updateValue('GOMAKOIL_SUPPLIER_HOME_HOOK', 'displayHomeContent4')
      || !Configuration::updateValue('GOMAKOIL_SUPPLIER_HOME_TITLE', 1)
      || !Configuration::updateValue('GOMAKOIL_SUPPLIER_LEFT_COLUMN', 1)
      || !Configuration::updateValue('GOMAKOIL_SUPPLIER_LEFT_COLUMN_COUNT', 5)
    )
      return false;

    return true;
  }

  public function uninstall(){

    if ( !parent::uninstall()
      || !Configuration::deleteByName('GOMAKOIL_SUPPLIER_HOME')
      || !Configuration::deleteByName('GOMAKOIL_SUPPLIER_HOME_HOOK')
      || !Configuration::deleteByName('GOMAKOIL_SUPPLIER_HOME_TITLE')
      || !Configuration::deleteByName('GOMAKOIL_SUPPLIERLEFT_COLUMN')
      || !Configuration::deleteByName('GOMAKOIL_SUPPLIER_LEFT_COLUMN_COUNT')
    )
      return false;

    return true;
  }

  public function hookHeader() {
    $this->context->controller->registerStylesheet('mpm_suppliers', 'modules/'.$this->name.'/views/css/mpm_suppliers.css', array('media' => 'all', 'priority' => 900));
    $this->context->controller->registerStylesheet('slick', 'modules/'.$this->name.'/views/css/slick.css', array('media' => 'all', 'priority' => 900));
    $this->context->controller->registerJavascript('mpm_suppliers', 'modules/'.$this->name.'/views/js/mpm_suppliers.js', array('position' => 'bottom', 'priority' => 150));
    $this->context->controller->registerJavascript('slick', 'modules/'.$this->name.'/views/js/slick.min.js', array('position' => 'bottom', 'priority' => 150));

  }

  public function getContent()
  {
    $this->context->controller->addCSS($this->_path.'views/css/mpm_suppliers_admin.css');
    $output = '';
    $errors = '';
    if (Tools::isSubmit('submitSuppliersHomePage'))
    {
      $show_home = (int)(Tools::getValue('GOMAKOIL_SUPPLIER_HOME'));
      $show_home_title = (int)(Tools::getValue('GOMAKOIL_SUPPLIER_HOME_TITLE'));
      $show_left = (int)(Tools::getValue('GOMAKOIL_SUPPLIER_LEFT_COLUMN'));
      $count_left = Tools::getValue('GOMAKOIL_SUPPLIER_LEFT_COLUMN_COUNT');
      $hook =  Tools::getValue('GOMAKOIL_SUPPLIER_HOME_HOOK');

      if (!Validate::isInt($count_left)){
        $errors = $this->l('Invalid number of elements.');
      }
      else {
        Configuration::updateValue('GOMAKOIL_SUPPLIER_HOME', $show_home);
        Configuration::updateValue('GOMAKOIL_SUPPLIER_HOME_TITLE', $show_home_title);
        Configuration::updateValue('GOMAKOIL_SUPPLIER_HOME_HOOK', $hook);
        Configuration::updateValue('GOMAKOIL_SUPPLIER_LEFT_COLUMN', $show_left);
        Configuration::updateValue('GOMAKOIL_SUPPLIER_LEFT_COLUMN_COUNT', $count_left);
      }

      if (isset($errors) AND $errors){
        $output .= $this->displayError($errors);
      }
      else{
        $output .= $this->displayConfirmation($this->l('Settings updated.'));
      }
    }
    return $output.$this->renderForm();
  }

  public function renderForm()
  {

    $hook = array(
      array(
        'id' => 'displayHomeContent1',
        'val' => 'displayHomeContent1',
        'name' => $this->l('displayHomeContent1')
      ),
      array(
        'id' => 'displayHomeContent2',
        'val' => 'displayHomeContent2',
        'name' => $this->l('displayHomeContent2')
      ),
      array(
        'id' => 'displayHomeContent3',
        'val' => 'displayHomeContent3',
        'name' => $this->l('displayHomeContent3')
      ),
      array(
        'id' => 'displayHomeContent4',
        'val' => 'displayHomeContent4',
        'name' => $this->l('displayHomeContent4')
      ),
      array(
        'id' => 'displayHomeContent5',
        'val' => 'displayHomeContent5',
        'name' => $this->l('displayHomeContent5')
      ),
    );

    $fields_form = array(
      'form' => array(
        'legend' => array(
          'title' => $this->l('Settings'),
          'icon' => 'icon-cogs'
        ),
        'input' => array(
          array(
            'type' => 'html',
            'name' => 'html_data',
            'form_group_class'=> 'block_data_settings',
            'html_content' => $this->l('Center column settings'),
          ),
          array(
            'type' => 'switch',
            'label' => $this->l('Display suppliers in center column'),
            'name' => 'GOMAKOIL_SUPPLIER_HOME',
            'values' => array(
              array(
                'id' => 'active_on',
                'value' => 1,
                'label' => $this->l('Enabled')
              ),
              array(
                'id' => 'active_off',
                'value' => 0,
                'label' => $this->l('Disabled')
              )
            ),
          ),
          array(
            'type' => 'select',
            'label' => $this->l('Hook'),
            'name' => 'GOMAKOIL_SUPPLIER_HOME_HOOK',
            'class' => '',
            'options' => array(
              'query' => $hook,
              'id' => 'id',
              'name' => 'name'
            )
          ),
          array(
            'type' => 'switch',
            'label' => $this->l('Display suppliers title'),
            'name' => 'GOMAKOIL_SUPPLIER_HOME_TITLE',
            'desc' => $this->l('Show title suppliers after logo.'),
            'values' => array(
              array(
                'id' => 'active_on',
                'value' => 1,
                'label' => $this->l('Enabled')
              ),
              array(
                'id' => 'active_off',
                'value' => 0,
                'label' => $this->l('Disabled')
              )
            ),
          ),
          array(
            'type' => 'html',
            'name' => 'html_data',
            'form_group_class'=> 'block_data_settings',
            'html_content' => $this->l('Left column settings'),
          ),
          array(
            'type' => 'switch',
            'label' => $this->l('Display suppliers in left column'),
            'name' => 'GOMAKOIL_SUPPLIER_LEFT_COLUMN',
            'values' => array(
              array(
                'id' => 'active_on',
                'value' => 1,
                'label' => $this->l('Enabled')
              ),
              array(
                'id' => 'active_off',
                'value' => 0,
                'label' => $this->l('Disabled')
              )
            ),
          ),

          array(
            'type' => 'text',
            'label' => $this->l('Number of suppliers to display'),
            'name' => 'GOMAKOIL_SUPPLIER_LEFT_COLUMN_COUNT',
            'class' => 'input_number',
          ),
        ),
        'submit' => array(
          'title' => $this->l('Save'),
        )
      ),
    );

    $helper = new HelperForm();
    $helper->show_toolbar = false;
    $helper->table =  $this->table;
    $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
    $helper->default_form_language = $lang->id;
    $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
    $helper->identifier = $this->identifier;
    $helper->submit_action = 'submitSuppliersHomePage';
    $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
    $helper->token = Tools::getAdminTokenLite('AdminModules');
    $helper->tpl_vars = array(
      'fields_value' => $this->getConfigFieldsValues(),
      'languages' => $this->context->controller->getLanguages(),
      'id_language' => $this->context->language->id
    );

    return $helper->generateForm(array($fields_form));
  }

  public function getConfigFieldsValues()
  {
    return array(
      'GOMAKOIL_SUPPLIER_HOME'              => Tools::getValue('GOMAKOIL_SUPPLIER_HOME', Configuration::get('GOMAKOIL_SUPPLIER_HOME')),
      'GOMAKOIL_SUPPLIER_HOME_TITLE'        => Tools::getValue('GOMAKOIL_SUPPLIER_HOME_TITLE', Configuration::get('GOMAKOIL_SUPPLIER_HOME_TITLE')),
      'GOMAKOIL_SUPPLIER_HOME_HOOK'         => Tools::getValue('GOMAKOIL_SUPPLIER_HOME_HOOK', Configuration::get('GOMAKOIL_SUPPLIER_HOME_HOOK')),
      'GOMAKOIL_SUPPLIER_LEFT_COLUMN'       => Tools::getValue('GOMAKOIL_SUPPLIER_LEFT_COLUMN', Configuration::get('GOMAKOIL_SUPPLIER_LEFT_COLUMN')),
      'GOMAKOIL_SUPPLIER_LEFT_COLUMN_COUNT' => Tools::getValue('GOMAKOIL_SUPPLIER_LEFT_COLUMN_COUNT', Configuration::get('GOMAKOIL_SUPPLIER_LEFT_COLUMN_COUNT')),
    );
  }

  public function hookDisplayHomeContent1()
  {
    $hook = Configuration::get('GOMAKOIL_SUPPLIER_HOME_HOOK');
    $active = Configuration::get('GOMAKOIL_SUPPLIER_HOME');

    if(($hook !== 'displayHomeContent1') || !$active){
      return false;
    }

    $this->smarty->assign($this->getVariables());
    return $this->display(__FILE__, 'views/templates/hook/suppliers.tpl');
  }

  public function hookDisplayHomeContent2()
  {
    $hook = Configuration::get('GOMAKOIL_SUPPLIER_HOME_HOOK');
    $active = Configuration::get('GOMAKOIL_SUPPLIER_HOME');

    if(($hook !== 'displayHomeContent2') || !$active){
      return false;
    }

    $this->smarty->assign($this->getVariables());
    return $this->display(__FILE__, 'views/templates/hook/suppliers.tpl');
  }

  public function hookDisplayHomeContent3()
  {
    $hook = Configuration::get('GOMAKOIL_SUPPLIER_HOME_HOOK');
    $active = Configuration::get('GOMAKOIL_SUPPLIER_HOME');

    if(($hook !== 'displayHomeContent3') || !$active){
      return false;
    }

    $this->smarty->assign($this->getVariables());
    return $this->display(__FILE__, 'views/templates/hook/suppliers.tpl');
  }

  public function hookDisplayHomeContent4()
  {
    $hook = Configuration::get('GOMAKOIL_SUPPLIER_HOME_HOOK');
    $active = Configuration::get('GOMAKOIL_SUPPLIER_HOME');

    if(($hook !== 'displayHomeContent4') || !$active){
      return false;
    }

    $this->smarty->assign($this->getVariables());
    return $this->display(__FILE__, 'views/templates/hook/suppliers.tpl');
  }

  public function hookDisplayHomeContent5()
  {
    $hook = Configuration::get('GOMAKOIL_SUPPLIER_HOME_HOOK');
    $active = Configuration::get('GOMAKOIL_SUPPLIER_HOME');

    if(($hook !== 'displayHomeContent5') || !$active){
      return false;
    }

    $this->smarty->assign($this->getVariables());
    return $this->display(__FILE__, 'views/templates/hook/suppliers.tpl');
  }


  public function getVariables()
  {
    $title = Configuration::get('GOMAKOIL_SUPPLIER_HOME_TITLE');
    $suppliers = Supplier::getSuppliers(false, $this->_langId);

    foreach ($suppliers as $key => $supplier) {
      $suppliers[$key]['image'] = $this->context->link->getSupplierImageLink($supplier['id_supplier'], 'brand_default');
      $suppliers[$key]['link'] = $this->context->link->getSupplierLink($supplier['id_supplier'], $supplier['link_rewrite'], $this->_langId);
    }

    return array(
      'id_shop'   => $this->_shopId,
      'id_lang'   => $this->_langId,
      'suppliers' => $suppliers,
      'title'     => $title,
    );
  }


  public function hookDisplayLeftColumn()
  {

    $active = Configuration::get('GOMAKOIL_SUPPLIER_LEFT_COLUMN');

    if(!$active){
      return false;
    }

    $link = $this->context->link->getPageLink('supplier');
    $count = Configuration::get('GOMAKOIL_SUPPLIER_LEFT_COLUMN_COUNT');
    $suppliers = Supplier::getSuppliers(false, $this->_langId, true, 1, $count);

    foreach ($suppliers as $key => $supplier) {
      $suppliers[$key]['link'] = $this->context->link->getSupplierLink($supplier['id_supplier'], $supplier['link_rewrite'], $this->_langId);
    }

    $this->smarty->assign(
      array(
        'id_shop'     => $this->_shopId,
        'id_lang'     => $this->_langId,
        'suppliers'   => $suppliers,
        'link'        => $link,
      )
    );

    return $this->display(__FILE__, 'views/templates/hook/blocksupplier.tpl');
  }


}
