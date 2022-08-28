<?php

namespace Container8A80KwM;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7240f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer36c15 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties05c9f = [
        
    ];

    public function getConnection()
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'getConnection', array(), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'getMetadataFactory', array(), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'getExpressionBuilder', array(), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'beginTransaction', array(), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'getCache', array(), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'transactional', array('func' => $func), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'commit', array(), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->commit();
    }

    public function rollback()
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'rollback', array(), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'getClassMetadata', array('className' => $className), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'createQuery', array('dql' => $dql), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'createNamedQuery', array('name' => $name), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'createQueryBuilder', array(), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'flush', array('entity' => $entity), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'clear', array('entityName' => $entityName), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->clear($entityName);
    }

    public function close()
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'close', array(), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->close();
    }

    public function persist($entity)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'persist', array('entity' => $entity), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'remove', array('entity' => $entity), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'refresh', array('entity' => $entity), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'detach', array('entity' => $entity), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'merge', array('entity' => $entity), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'contains', array('entity' => $entity), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'getEventManager', array(), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'getConfiguration', array(), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'isOpen', array(), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'getUnitOfWork', array(), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'getProxyFactory', array(), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'initializeObject', array('obj' => $obj), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'getFilters', array(), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'isFiltersStateClean', array(), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, 'hasFilters', array(), $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        return $this->valueHolder7240f->hasFilters();
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

        $instance->initializer36c15 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7240f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7240f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7240f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer36c15 && ($this->initializer36c15->__invoke($valueHolder7240f, $this, '__get', ['name' => $name], $this->initializer36c15) || 1) && $this->valueHolder7240f = $valueHolder7240f;

        if (isset(self::$publicProperties05c9f[$name])) {
            return $this->valueHolder7240f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
