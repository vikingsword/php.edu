<?php

namespace core;

use PDO;

class Query
{
    protected PDO $db;
    protected string $table;
    protected string $field;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    // 获取当前数据表名称
    public function table(string $table) : self
    {
        $this->table = $table;
        return $this;
    }

    // 设置字段
    public function field(string $field = '*') : self
    {
        $this->field = $field;
        return $this;
    }

    // 获取全部数据
    public function select()
    {
        $sql = 'SELECT ' . $this->field . ' FROM ' . $this->table;

        echo $sql;

        $stmt = $this->db->prepare($sql);
      
        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            print_r($stmt->errorInfo());
        }
    }
}
