<?php

namespace App\Opool\Adapter;

use PCPay\API\Entities\EntityBase;

interface IdbAdapter
{
    public function select($sql, array $binds, $timeout = 0);
    public function selectFirst($sql, array $binds, $timeout = 0);
    public function insert(EntityBase $entity, $timeout = 0);
    public function update(EntityBase $entity, $timeout = 0);
    public function insertBatch($table, $values, $timeout = 0);
    public function execute($sql, array $binds, $timeout = 0);
    public function nativeSelect($sql, $timeout = 0);
    public function nativeSelectFirst($sql, $timeout = 0);
    public function nativeExecute($sql, $timeout = 0);
    public function each($sql, array $binds, $timeout, $closure);
    public function startTransaction();
    public function commit();
    public function rollback();
}