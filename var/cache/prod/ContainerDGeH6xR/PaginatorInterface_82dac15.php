<?php

namespace ContainerDGeH6xR;

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolder7240f = null;
    private $initializer36c15 = null;
    private static $publicProperties05c9f = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;
        if ($this->valueHolder7240f === $returnValue = $this->valueHolder7240f->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializer36c15 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder7240f) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder7240f = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, '__get', ['name' => $name], $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;
        if (isset(self::$publicProperties05c9f[$name])) {
            return $this->valueHolder7240f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
