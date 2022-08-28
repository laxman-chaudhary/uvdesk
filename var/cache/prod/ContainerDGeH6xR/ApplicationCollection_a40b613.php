<?php

namespace ContainerDGeH6xR;

class ApplicationCollection_a40b613 extends \Webkul\UVDesk\ExtensionFrameworkBundle\Utils\ApplicationCollection implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder7240f = null;
    private $initializer36c15 = null;
    private static $publicProperties05c9f = [
        
    ];
    public function organizeCollection()
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'organizeCollection', array(), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;
        return $this->valueHolder7240f->organizeCollection();
    }
    public function getCollection()
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'getCollection', array(), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;
        return $this->valueHolder7240f->getCollection();
    }
    public function findApplicationsByVendor($vendor)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'findApplicationsByVendor', array('vendor' => $vendor), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;
        return $this->valueHolder7240f->findApplicationsByVendor($vendor);
    }
    public function findApplicationsByPackage(\Webkul\UVDesk\ExtensionFrameworkBundle\Definition\Package\PackageInterface $package)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'findApplicationsByPackage', array('package' => $package), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;
        return $this->valueHolder7240f->findApplicationsByPackage($package);
    }
    public function findApplicationByFullyQualifiedName($vendorName, $packageName, $applicationQualifiedName) : ?\Webkul\UVDesk\ExtensionFrameworkBundle\Definition\Application\ApplicationInterface
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'findApplicationByFullyQualifiedName', array('vendorName' => $vendorName, 'packageName' => $packageName, 'applicationQualifiedName' => $applicationQualifiedName), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;
        return $this->valueHolder7240f->findApplicationByFullyQualifiedName($vendorName, $packageName, $applicationQualifiedName);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Webkul\UVDesk\ExtensionFrameworkBundle\Utils\ApplicationCollection $instance) {
            unset($instance->applications, $instance->fullyQualifiedApplicationNames, $instance->applicationsByFullyQualifiedName, $instance->applicationsByQualifiedPackageName, $instance->isOrganized);
        }, $instance, 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\ApplicationCollection')->__invoke($instance);
        $instance->initializer36c15 = $initializer;
        return $instance;
    }
    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, \Webkul\UVDesk\ExtensionFrameworkBundle\Definition\MappingResource $mappingResource, \Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection $packageCollection)
    {
        static $reflection;
        if (! $this->valueHolder7240f) {
            $reflection = $reflection ?? new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\ApplicationCollection');
            $this->valueHolder7240f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Webkul\UVDesk\ExtensionFrameworkBundle\Utils\ApplicationCollection $instance) {
            unset($instance->applications, $instance->fullyQualifiedApplicationNames, $instance->applicationsByFullyQualifiedName, $instance->applicationsByQualifiedPackageName, $instance->isOrganized);
        }, $this, 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\ApplicationCollection')->__invoke($this);
        }
        $this->valueHolder7240f->__construct($container, $mappingResource, $packageCollection);
    }
    public function & __get($name)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, '__get', ['name' => $name], $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;
        if (isset(self::$publicProperties05c9f[$name])) {
            return $this->valueHolder7240f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\ApplicationCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7240f;
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
        $targetObject = $this->valueHolder7240f;
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
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;
        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\ApplicationCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7240f;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder7240f;
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
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, '__isset', array('name' => $name), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;
        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\ApplicationCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7240f;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder7240f;
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
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, '__unset', array('name' => $name), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;
        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\ApplicationCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7240f;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder7240f;
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
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, '__clone', array(), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;
        $this->valueHolder7240f = clone $this->valueHolder7240f;
    }
    public function __sleep()
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, '__sleep', array(), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;
        return array('valueHolder7240f');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Webkul\UVDesk\ExtensionFrameworkBundle\Utils\ApplicationCollection $instance) {
            unset($instance->applications, $instance->fullyQualifiedApplicationNames, $instance->applicationsByFullyQualifiedName, $instance->applicationsByQualifiedPackageName, $instance->isOrganized);
        }, $this, 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\ApplicationCollection')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer36c15 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer36c15;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'initializeProxy', array(), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7240f;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7240f;
    }
}

if (!\class_exists('ApplicationCollection_a40b613', false)) {
    \class_alias(__NAMESPACE__.'\\ApplicationCollection_a40b613', 'ApplicationCollection_a40b613', false);
}
