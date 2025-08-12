<?php

namespace App\Models\Dao;

use App\Opool\Adapter\IDbAdapter;
use App\Opool\Adapter\OpoolAdapter;
use PCPay\API\Entities\EntityBase;

abstract class OpoolDaoBase
{
    /** @var mixed|OpoolAdapter  */
    public $dbAdpt;

    /**
     * OPoolDAOBase constructor.
     * @param IDbAdapter|null $dbAdpt
     */
    public function __construct(IDbAdapter $dbAdpt = null)
    {
        $this->dbAdpt = $dbAdpt ?: OpoolAdapter::getInstance();
    }

    /**
     * @param EntityBase $entity
     * @return mixed
     * @throws \Exception
     */
    public function insert(EntityBase $entity)
    {
        $affectedRows = $this->dbAdpt->insert($entity);

        return $affectedRows;
    }

    /**
     * @param EntityBase $entity
     * @return mixed
     * @throws \Exception
     */
    public function update(EntityBase $entity)
    {
        return $this->dbAdpt->update($entity);
    }

    /**
     * 更新並檢查需求欄位資料是否一致
     *
     * @param EntityBase $entity
     * @param array $checkFields
     * @return int|mixed
     * @throws \Exception
     */
    public function checkAndUpdate(EntityBase $entity, Array $checkFields)
    {
        $affectedRows = $this->dbAdpt->update($entity, 0, null, $checkFields);

        return $affectedRows;
    }

    /**
     * 將單筆資料 array 轉換為物件
     * @param array $result
     * @param $class
     * @return EntityBase
     * @throws \RuntimeException
     */
    protected function transform($result, $class)
    {
        if($result == null){
            return null;
        }

        $obj = new $class();

        if(!($obj instanceof EntityBase)){
            throw new \RuntimeException('Class is not an entity');
        }

        $obj->fromArray($result);

        return $obj;
    }
}