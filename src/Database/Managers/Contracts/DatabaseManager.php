<?php

namespace PROJECT\Database\Managers\Contracts;

interface DatabaseManager
{
  public function connect(): \PDO;

  public function query(string $query, $values = []);

  public function create($data);

  public function read($columns = '*', $filter = null);

  public function update($column, $value, $data);

  public function delete($columns, $value);
}