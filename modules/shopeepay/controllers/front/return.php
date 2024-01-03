<?php


class ShopeepayReturnModuleFrontController extends ModuleFrontController {

    public $ssl = true;
    public $display_column_left = false;
    /**
     * @see FrontController::initContent()
     */
    public function initContent() {
		
        parent::initContent();
		
		$objOrder = new Order(Tools::getValue('merchantOrderId'));
		$cart = new Cart($objOrder->id_cart);
        $customer = new Customer($cart->id_customer);
		$status = Tools::getValue('resultCode');
		
        if($status == '01')
		{      			
			Tools::redirect('index.php?controller=order-confirmation&id_cart='.$objOrder->id_cart.'&id_module='.$this->module->id.'&id_order='.$objOrder->id_cart.'&key='.$customer->secure_key);	
		}		
		
		else
		{			parent::initContent();
			global $smarty;
			
			if (null !==Tools::getValue('merchantOrderId') && '' !==Tools::getValue('merchantOrderId') ){
				$order_id = Tools::getValue('merchantOrderId');
			}
			$cart = $this->context->cart;		
			$this->context->smarty->assign(array(
				'base_url' => __PS_BASE_URI__
            ));
            $this->setTemplate('module:shopeepay/views/templates/hook/payment_return_cancel.tpl');
			
		}
	}
}