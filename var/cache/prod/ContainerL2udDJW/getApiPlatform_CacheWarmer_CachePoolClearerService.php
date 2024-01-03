<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'api_platform.cache_warmer.cache_pool_clearer' shared service.

return $this->privates['api_platform.cache_warmer.cache_pool_clearer'] = new \ApiPlatform\Symfony\Bundle\CacheWarmer\CachePoolClearerCacheWarmer(($this->services['cache.system_clearer'] ?? $this->load('getCache_SystemClearerService.php')), [0 => 'api_platform.cache.metadata.property', 1 => 'api_platform.cache.metadata.property.legacy', 2 => 'api_platform.cache.metadata.resource', 3 => 'api_platform.cache.metadata.resource.legacy', 4 => 'api_platform.cache.metadata.resource_collection', 5 => 'api_platform.cache.route_name_resolver', 6 => 'api_platform.cache.identifiers_extractor', 7 => 'api_platform.cache.subresource_operation_factory', 8 => 'api_platform.elasticsearch.cache.metadata.document']);