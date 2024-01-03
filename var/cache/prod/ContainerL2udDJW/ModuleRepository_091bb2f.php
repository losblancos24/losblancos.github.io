<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderca3d7 = null;
    private $initializer60b89 = null;
    private static $publicProperties70ebc = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer60b89 && ($this->initializer60b89->__invoke($valueHolderca3d7, $this, 'getList', array(), $this->initializer60b89) || 1) && $this->valueHolderca3d7 = $valueHolderca3d7;
        return $this->valueHolderca3d7->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer60b89 && ($this->initializer60b89->__invoke($valueHolderca3d7, $this, 'getInstalledModules', array(), $this->initializer60b89) || 1) && $this->valueHolderca3d7 = $valueHolderca3d7;
        return $this->valueHolderca3d7->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer60b89 && ($this->initializer60b89->__invoke($valueHolderca3d7, $this, 'getMustBeConfiguredModules', array(), $this->initializer60b89) || 1) && $this->valueHolderca3d7 = $valueHolderca3d7;
        return $this->valueHolderca3d7->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer60b89 && ($this->initializer60b89->__invoke($valueHolderca3d7, $this, 'getUpgradableModules', array(), $this->initializer60b89) || 1) && $this->valueHolderca3d7 = $valueHolderca3d7;
        return $this->valueHolderca3d7->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer60b89 && ($this->initializer60b89->__invoke($valueHolderca3d7, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer60b89) || 1) && $this->valueHolderca3d7 = $valueHolderca3d7;
        return $this->valueHolderca3d7->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer60b89 && ($this->initializer60b89->__invoke($valueHolderca3d7, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer60b89) || 1) && $this->valueHolderca3d7 = $valueHolderca3d7;
        return $this->valueHolderca3d7->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer60b89 && ($this->initializer60b89->__invoke($valueHolderca3d7, $this, 'setActionUrls', array('collection' => $collection), $this->initializer60b89) || 1) && $this->valueHolderca3d7 = $valueHolderca3d7;
        return $this->valueHolderca3d7->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer60b89 && ($this->initializer60b89->__invoke($valueHolderca3d7, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer60b89) || 1) && $this->valueHolderca3d7 = $valueHolderca3d7;
        return $this->valueHolderca3d7->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer60b89 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolderca3d7) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderca3d7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolderca3d7->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer60b89 && ($this->initializer60b89->__invoke($valueHolderca3d7, $this, '__get', ['name' => $name], $this->initializer60b89) || 1) && $this->valueHolderca3d7 = $valueHolderca3d7;
        if (isset(self::$publicProperties70ebc[$name])) {
            return $this->valueHolderca3d7->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca3d7;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderca3d7;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer60b89 && ($this->initializer60b89->__invoke($valueHolderca3d7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer60b89) || 1) && $this->valueHolderca3d7 = $valueHolderca3d7;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca3d7;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderca3d7;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer60b89 && ($this->initializer60b89->__invoke($valueHolderca3d7, $this, '__isset', array('name' => $name), $this->initializer60b89) || 1) && $this->valueHolderca3d7 = $valueHolderca3d7;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca3d7;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderca3d7;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer60b89 && ($this->initializer60b89->__invoke($valueHolderca3d7, $this, '__unset', array('name' => $name), $this->initializer60b89) || 1) && $this->valueHolderca3d7 = $valueHolderca3d7;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca3d7;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderca3d7;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer60b89 && ($this->initializer60b89->__invoke($valueHolderca3d7, $this, '__clone', array(), $this->initializer60b89) || 1) && $this->valueHolderca3d7 = $valueHolderca3d7;
        $this->valueHolderca3d7 = clone $this->valueHolderca3d7;
    }
    public function __sleep()
    {
        $this->initializer60b89 && ($this->initializer60b89->__invoke($valueHolderca3d7, $this, '__sleep', array(), $this->initializer60b89) || 1) && $this->valueHolderca3d7 = $valueHolderca3d7;
        return array('valueHolderca3d7');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer60b89 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer60b89;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer60b89 && ($this->initializer60b89->__invoke($valueHolderca3d7, $this, 'initializeProxy', array(), $this->initializer60b89) || 1) && $this->valueHolderca3d7 = $valueHolderca3d7;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderca3d7;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderca3d7;
    }
}
