<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.configuration' shared service.

return $this->services['ps_checkout.configuration'] = new \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfiguration(($this->services['ps_checkout.configuration.options.resolver'] ?? $this->load('getPsCheckout_Configuration_Options_ResolverService.php')));