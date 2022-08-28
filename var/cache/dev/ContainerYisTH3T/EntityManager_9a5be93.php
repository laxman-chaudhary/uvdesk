<?php

namespace ContainerYisTH3T;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'getConnection', array(), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'getMetadataFactory', array(), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'getExpressionBuilder', array(), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'beginTransaction', array(), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'getCache', array(), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->getCache();
    }

    public function transactional($func)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'transactional', array('func' => $func), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'wrapInTransaction', array('func' => $func), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'commit', array(), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->commit();
    }

    public function rollback()
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'rollback', array(), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'getClassMetadata', array('className' => $className), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'createQuery', array('dql' => $dql), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'createNamedQuery', array('name' => $name), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'createQueryBuilder', array(), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'flush', array('entity' => $entity), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'clear', array('entityName' => $entityName), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->clear($entityName);
    }

    public function close()
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'close', array(), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->close();
    }

    public function persist($entity)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'persist', array('entity' => $entity), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'remove', array('entity' => $entity), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'refresh', array('entity' => $entity), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'detach', array('entity' => $entity), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'merge', array('entity' => $entity), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'getRepository', array('entityName' => $entityName), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'contains', array('entity' => $entity), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'getEventManager', array(), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'getConfiguration', array(), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'isOpen', array(), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'getUnitOfWork', array(), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'getProxyFactory', array(), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'initializeObject', array('obj' => $obj), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'getFilters', array(), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'isFiltersStateClean', array(), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, 'hasFilters', array(), $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        return $this->valueHoldera9eb6->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer14918 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera9eb6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera9eb6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera9eb6->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer14918 && ($this->initializer14918->__invoke($valueHoldera9eb6, $this, '__get', ['name' => $name], $this->initializer14918) || 1) && $this->valueHoldera9eb6 = $valueHoldera9eb6;

        if (isset(self::$publicProperties11afa[$name])) {
            return $this->valueHoldera9eb6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
