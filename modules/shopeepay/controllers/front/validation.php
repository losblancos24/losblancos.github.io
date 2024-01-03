<?php

require_once(dirname(__FILE__).'/../../library/Duitku.php');

class ShopeepayValidationModuleFrontController extends ModuleFrontController {

    /**
     * @see FrontController::postProcess()
     */
    public function postProcess() {
		
        $cart = $this->context->cart;
		$currency = $this->context->currency;		
		$customer = new Customer($cart->id_customer);
        if (!Validate::isLoadedObject($customer)|| $cart->id_address_delivery == 0 || $cart->id_address_invoice == 0 || !$this->module->active)
            Tools::redirect('index.php?controller=order&step=1');						

        // Check that this payment option is still available in case the customer changed his address just before the end of the checkout process
        $authorized = false;
        foreach (Module::getPaymentModules() as $module)
            if ($module['name'] == 'shopeepay') {
                $authorized = true;
                break;
            }
        if (!$authorized)
            die($this->module->l('This payment method is not available.', 'validation'));

        $customer = new Customer($cart->id_customer);
        if (!Validate::isLoadedObject($customer))
            Tools::redirect('index.php?controller=order&step=1');
			
		$merchantcode = Configuration::get('DUITKU_SHOPEEPAY_MERCHANTCODE');
        $apikey = Configuration::get('DUITKU_SHOPEEPAY_APIKEY');
        $expiryPeriod = Configuration::get('DUITKU_SHOPEEPAY_EXPIRED');
		$cart_id = $cart->id;
		$amount = $cart->getOrderTotal(true, Cart::BOTH);		
        $domain = Tools::getShopDomainSsl(true, true);
		$address = new Address($cart->id_address_invoice);
		
		$this->module->validateOrder($cart_id, Configuration::get('PS_OS_CHEQUE'), $amount, $this->module->displayName, null, array(), (int)$currency->id, false, $customer->secure_key);
		
		$order = Order::getOrderByCartId($cart_id);
		
		//itemDetails
		$products = $cart->getProducts();
		$itemDetails = array();
		$shipping_fee = $cart->getTotalShippingCost();
		$discount = -1 * $cart->getOrderTotal(true, Cart::ONLY_DISCOUNTS);

		foreach ($products as $aProduct) {
		  $itemDetails[] = array(
			"price" =>  (int)($aProduct['price_wt'] * (int)$aProduct['cart_quantity']),
			"quantity" => (int)$aProduct['cart_quantity'],
			"name" => $aProduct['name']
		  );
		}
		
		if ($discount !== 0) {
		  $itemDetails[] = array(
			"price" =>  (int)$discount,
			"quantity" => 1,
			"name" => "Coupon"
		  );
		}

		if ($shipping_fee > 0) {
		  $itemDetails[] = array(
			"price" =>  (int)($shipping_fee),
			"quantity" => 1,
			"name" => "Shipping fee"
		  );
		}
		
		$billing_address = array(
		  'firstName' => (string)$address->firstname,
		  'lastName' => (string)$address->lastname,
		  'address' => (string)$address->address1,
		  'city' => (string)$address->city, 
		  'postalCode' => (string)$address->postcode,
		  'phone' => (string)$this->ValidPhone($address->phone, $address->phone_mobile),
		  'countryCode' => "ID"
		);
		
		$customerDetails = array(
			'firstName' => (string)$address->firstname,
			'lastName' => (string)$address->lastname,
			'email' => (string)$customer->email,
			'phoneNumber' => (string)$this->ValidPhone($address->phone, $address->phone_mobile),
			'billingAddress' => $billing_address,
			'shippingAddress' => $billing_address
		);
				
		$signature = md5($merchantcode.$order.$amount.$apikey);
		$params = array(
             'merchantCode' => $merchantcode,
             'paymentAmount' => $amount,
             'paymentMethod' => 'SP',
			 'merchantOrderId' => $order,
             'productDetails' => 'Order ' . $order,
             'additionalParam' => $cart->id,
             'merchantUserInfo' => $customer->email,
			 'customerVaName' => $customer->email,
             'email' => $customer->email,
             'phoneNumber' => $address->phone_mobile,
			 'returnUrl' => $domain . __PS_BASE_URI__ . 'index.php?fc=module&module=shopeepay&controller=return',
			 'callbackUrl' => $domain . __PS_BASE_URI__ . 'index.php?fc=module&module=shopeepay&controller=confirmation',
			 'customerDetail' => $customerDetails,
			 'expiryPeriod' => $expiryPeriod,
			 'itemDetails' => $itemDetails,
             'signature' => $signature,
         );        
		
		// Logger::addLog(json_encode($params, true));
		
		try {     
			$redirUrl = DuitkuCore_Web::getRedirectionUrl(Configuration::get('DUITKU_SHOPEEPAY_URL'), $params);			
			if (isset($redirUrl))
                Tools::redirect($redirUrl);
			else 
				Tools::redirect('index.php?controller=order&step=1');
		}
		catch (Exception $e) {			
			echo $e->getMessage();
		}		        
    }
	
	function ValidPhone($home_phone = '', $mobile_phone = '')
	{
		if (empty($home_phone) && !empty($mobile_phone))
		{
			return $mobile_phone;
		} else if (!empty($home_phone) && empty($mobile_phone))
		{
			return $home_phone;
		} else if (!empty($home_phone) && !empty($mobile_phone))
		{
			return $mobile_phone;
		} else
		{
			return '081234567890';
		}
	}
}
