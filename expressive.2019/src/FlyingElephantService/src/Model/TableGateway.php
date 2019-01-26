<?php
/**
 * Table Gateway Class
 */
namespace FlyingElephantService\Model;

use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway as ZFTableGateway;
use Zend\Hydrator\ObjectPropertyHydrator;
use FlyingElephantService\PropulsionSystems\PropulsionSystemsEntity as Entity;

/**
 * Custom TableGateway instance for Model
 *
 * Creates a HydratingResultSet seeded with an ObjectProperty hydrator and Entity instance.
 */
class TableGateway extends ZFTableGateway
{
    /**
     * TableGateway constructor.
     * @param array|string|\Zend\Db\Sql\TableIdentifier $table
     * @param AdapterInterface $adapter
     * @param null $features
     */
    public function __construct($table, AdapterInterface $adapter, $features = null)
    {
        $resultSet = new HydratingResultSet(new ObjectPropertyHydrator(), new Entity());
        return parent::__construct($table, $adapter, $features, $resultSet);
    }
}
