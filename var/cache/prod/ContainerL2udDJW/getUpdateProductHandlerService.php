<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Adapter\Product\CommandHandler\UpdateProductHandler' shared autowired service.

return $this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\CommandHandler\\UpdateProductHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\UpdateProductHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Update\\Filler\\ProductFiller'] ?? $this->load('getProductFillerService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->load('getProductRepository4Service.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Update\\ProductIndexationUpdater'] ?? $this->load('getProductIndexationUpdaterService.php')));
