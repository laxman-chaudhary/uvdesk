<?php

namespace ContainerYisTH3T;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{

    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        if ($this->valueHoldera9eb6 === $returnValue = $this->valueHoldera9eb6->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializer14918 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldera9eb6) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHoldera9eb6 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, '__get', ['name' => $name], $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        if (isset(self::$publicProperties11afa[$name])) {
            return $this->valueHoldera9eb6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
