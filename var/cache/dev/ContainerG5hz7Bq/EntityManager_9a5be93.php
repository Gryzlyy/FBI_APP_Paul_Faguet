<?php

namespace ContainerG5hz7Bq;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder07159 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf7d70 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5d6c8 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'getConnection', array(), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'getMetadataFactory', array(), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'getExpressionBuilder', array(), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'beginTransaction', array(), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'getCache', array(), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'transactional', array('func' => $func), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->transactional($func);
    }

    public function commit()
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'commit', array(), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->commit();
    }

    public function rollback()
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'rollback', array(), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'getClassMetadata', array('className' => $className), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'createQuery', array('dql' => $dql), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'createNamedQuery', array('name' => $name), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'createQueryBuilder', array(), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'flush', array('entity' => $entity), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'clear', array('entityName' => $entityName), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->clear($entityName);
    }

    public function close()
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'close', array(), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->close();
    }

    public function persist($entity)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'persist', array('entity' => $entity), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'remove', array('entity' => $entity), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'refresh', array('entity' => $entity), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'detach', array('entity' => $entity), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'merge', array('entity' => $entity), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'contains', array('entity' => $entity), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'getEventManager', array(), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'getConfiguration', array(), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'isOpen', array(), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'getUnitOfWork', array(), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'getProxyFactory', array(), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'initializeObject', array('obj' => $obj), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'getFilters', array(), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'isFiltersStateClean', array(), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'hasFilters', array(), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return $this->valueHolder07159->hasFilters();
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

        $instance->initializerf7d70 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder07159) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder07159 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder07159->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, '__get', ['name' => $name], $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        if (isset(self::$publicProperties5d6c8[$name])) {
            return $this->valueHolder07159->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder07159;

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

        $targetObject = $this->valueHolder07159;
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
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder07159;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder07159;
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
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, '__isset', array('name' => $name), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder07159;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder07159;
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
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, '__unset', array('name' => $name), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder07159;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder07159;
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
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, '__clone', array(), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        $this->valueHolder07159 = clone $this->valueHolder07159;
    }

    public function __sleep()
    {
        $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, '__sleep', array(), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;

        return array('valueHolder07159');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf7d70 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf7d70;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf7d70 && ($this->initializerf7d70->__invoke($valueHolder07159, $this, 'initializeProxy', array(), $this->initializerf7d70) || 1) && $this->valueHolder07159 = $valueHolder07159;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder07159;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder07159;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
