<?php

namespace ContainerYisTH3T;
include_once \dirname(__DIR__, 4).'/vendor/uvdesk/extension-framework/Utils/PackageCollection.php';

class PackageCollection_b86d16c extends \Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera9eb6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer14918 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties11afa = [
        
    ];

    public function organizeCollection()
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'organizeCollection', array(), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->organizeCollection();
    }

    public function getQualifiedPackageReference($class) : ?string
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'getQualifiedPackageReference', array('class' => $class), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->getQualifiedPackageReference($class);
    }

    public function getPackageQualifiedName($id) : ?string
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'getPackageQualifiedName', array('id' => $id), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->getPackageQualifiedName($id);
    }

    public function getPackageReferenceByQualifiedName($name) : ?string
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'getPackageReferenceByQualifiedName', array('name' => $name), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->getPackageReferenceByQualifiedName($name);
    }

    public function getCollection()
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'getCollection', array(), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->getCollection();
    }

    public function getPackageByAttributes($vendor, $package)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'getPackageByAttributes', array('vendor' => $vendor, 'package' => $package), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->getPackageByAttributes($vendor, $package);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection $instance) {
            unset($instance->packages, $instance->qualifiedPackageNames, $instance->packagesByBaseNamespace, $instance->packagesByQualifiedName, $instance->packagesByQualifiedVendorName, $instance->isOrganized);
        }, $instance, 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection')->__invoke($instance);

        $instance->initializer14918 = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, \Webkul\UVDesk\ExtensionFrameworkBundle\Definition\MappingResource $mappingResource)
    {
        static $reflection;

        if (! $this->valueHoldera9eb6) {
            $reflection = $reflection ?? new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');
            $this->valueHoldera9eb6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection $instance) {
            unset($instance->packages, $instance->qualifiedPackageNames, $instance->packagesByBaseNamespace, $instance->packagesByQualifiedName, $instance->packagesByQualifiedVendorName, $instance->isOrganized);
        }, $this, 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection')->__invoke($this);

        }

        $this->valueHoldera9eb6->__construct($container, $mappingResource);
    }

    public function & __get($name)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, '__get', ['name' => $name], $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        if (isset(self::$publicProperties11afa[$name])) {
            return $this->valueHoldera9eb6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9eb6;

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

        $targetObject = $this->valueHoldera9eb6;
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
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9eb6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera9eb6;
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
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, '__isset', array('name' => $name), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9eb6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera9eb6;
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
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, '__unset', array('name' => $name), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9eb6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera9eb6;
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
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, '__clone', array(), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        $this->valueHoldera9eb6 = clone $this->valueHoldera9eb6;
    }

    public function __sleep()
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, '__sleep', array(), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return array('valueHoldera9eb6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection $instance) {
            unset($instance->packages, $instance->qualifiedPackageNames, $instance->packagesByBaseNamespace, $instance->packagesByQualifiedName, $instance->packagesByQualifiedVendorName, $instance->isOrganized);
        }, $this, 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer14918 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer14918;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'initializeProxy', array(), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera9eb6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera9eb6;
    }


}

if (!\class_exists('PackageCollection_b86d16c', false)) {
    \class_alias(__NAMESPACE__.'\\PackageCollection_b86d16c', 'PackageCollection_b86d16c', false);
}
