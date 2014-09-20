<?php
namespace User\V2\Rest\UserProfile\Table;

use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSetInterface;
use Zend\Db\TableGateway\TableGateway;

/**
 * Class UserTable
 *
 * @package User\V2\Rest\UserProfile\Table
 */
class UserTable extends TableGateway
{
    /**
     * @param AdapterInterface   $adapter
     * @param ResultSetInterface $resultSetPrototype
     */
    public function __construct(
        AdapterInterface $adapter,
        ResultSetInterface $resultSetPrototype = null
    ) {
        $table = 'users';

        parent::__construct($table, $adapter, null, $resultSetPrototype);
    }

    /**
     * @param integer $id
     *
     * @return array
     */
    public function fetchUserById($id)
    {
        $select = $this->getSql()->select();
        $select->where->equalTo('id', $id);

        return $this->selectWith($select)->current();
    }

    /**
     * @param $id
     *
     * @return array
     */
    public function fetchContactsById($id)
    {
        $select = $this->getSql()->select();
        $select->join('user_contacts', 'user_id_2 = id', array());
        $select->where->equalTo('user_id_1', $id);

        return $this->selectWith($select)->toArray();
    }

    /**
     * @param $params
     *
     * @return mixed
     */
    public function fetchUsers($params)
    {
        $select = $this->getSql()->select();

        return $this->selectWith($select)->toArray();
    }
} 