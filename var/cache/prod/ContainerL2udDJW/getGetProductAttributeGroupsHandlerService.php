<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Adapter\Product\AttributeGroup\QueryHandler\GetProductAttributeGroupsHandler' shared autowired service.

return $this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\AttributeGroup\\QueryHandler\\GetProductAttributeGroupsHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\AttributeGroup\QueryHandler\GetProductAttributeGroupsHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Attribute\\Repository\\AttributeRepository'] ?? $this->load('getAttributeRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\AttributeGroup\\Repository\\AttributeGroupRepository'] ?? $this->load('getAttributeGroupRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->load('getProductRepository4Service.php')));
