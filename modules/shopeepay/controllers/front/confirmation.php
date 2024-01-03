<?php
require_once(dirname(__FILE__).'/../../library/Duitku.php');


class ShopeepayConfirmationModuleFrontController extends ModuleFrontController {

    public $ssl = true;
    public $display_column_left = false;

    /**
     * @see FrontController::initContent()
     */
    public function initContent() {
        parent::initContent();

		if (empty($_POST['resultCode']) || empty($_POST['merchantOrderId']) || empty($_POST['reference'])) {
          throw new Exception(__('wrong query string please contact admin.', 'duitku'));
		}

		$order_id = stripslashes($_POST['merchantOrderId']);
		$status = stripslashes($_POST['resultCode']);
		$reference = stripslashes($_POST['reference']);
		$api_key = Configuration::get('DUITKU_SHOPEEPAY_APIKEY');
		$merchant_code = Configuration::get('DUITKU_SHOPEEPAY_MERCHANTCODE');
		$endpoint = Configuration::get('DUITKU_SHOPEEPAY_URL');
				
		$objOrder = new Order($order_id);		
		//check if order id is in the database
		if ($objOrder) {			
			$history = new OrderHistory();
			$history->id_order = (int)$objOrder->id;
			if ($status == '00' && DuitkuCore_Web::validateTransaction($endpoint, $merchant_code, $order_id, $reference, $api_key)) {											
				//$history->changeIdOrderState(Configuration::get('PS_OS_PAYMENT'), (int)($objOrder->id));
				$history->changeIdOrderState(Configuration::get('DUITKU_SHOPEEPAY_SUCCESS_STATUS'), (int)($objOrder->id));																	
				$history->addWithemail(true);				
			} else {										
				$history->changeIdOrderState(Configuration::get('DUITKU_SHOPEEPAY_FAILURE_STATUS'), (int)($objOrder->id));	
				$history->addWithemail(true);
			}     
		}		    
		
		exit;
	}
}