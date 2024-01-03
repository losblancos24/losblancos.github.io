<?php

include(dirname(__FILE__) . '/../../config/config.inc.php');
include(dirname(__FILE__) . '/../../header.php');
include(dirname(__FILE__) . '/shopeepay.php');

$context = Context::getContext();
$cart = $context->cart;
$shopeepay = Module::getInstanceByName('shopeepay');

if ($cart->id_customer == 0 OR $cart->id_address_delivery == 0 OR $cart->id_address_invoice == 0 OR ! $shopeepay->active)
    Tools::redirect('index.php?controller=order&step=1');

// Check that this payment option is still available in case the customer changed his address just before the end of the checkout process
$authorized = false;
foreach (Module::getPaymentModules() as $module)
    if ($module['name'] == 'shopeepay') {
        $authorized = true;
        break;
    }
if (!$authorized)
    die($shopeepay->l('This payment method is not available.', 'validation'));

$customer = new Customer((int) $cart->id_customer);

if (!Validate::isLoadedObject($customer))
    Tools::redirect('index.php?controller=order&step=1');

$currency = $context->currency;
$total = (float) ($cart->getOrderTotal(true, Cart::BOTH));

$shopeepay->validateOrder($cart->id, Configuration::get('PS_OS_PAYMENT'), $total, $shopeepay->displayName, NULL, array(), (int) $currency->id, false, $customer->secure_key);

$order = new Order($shopeepay->currentOrder);
Tools::redirect('index.php?controller=order-confirmation&id_cart=' . $cart->id . '&id_module=' . $shopeepay->id . '&id_order=' . $shopeepay->currentOrder . '&key=' . $customer->secure_key);
