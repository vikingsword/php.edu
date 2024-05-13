<?php
namespace phpcn3;
use PDO;
class Db {
    protected $db;
    protected $table;
    protected $field;
    protected $limit;
    protected $opt = [];

    public function __construct($dsn, $username, $password)
    {
        $this->db = new PDO($dsn, $username, $password);
    }

    public function table($table)
    {
        $this->table = $table;
        return $this;
    }

    public function field($field)
    {
        $this->field = $field;
        return $this;
    }

    public function limit($limit = 10)
    {
        $this->limit = $limit;
        $this->opt['limit'] = " LIMIT $limit";
        return $this;
    }

    // 分页
    public function page($page = 1)
    {
        $this->opt['offset'] = ' OFFSET ' . ($page - 1) * $this->limit;
        return $this;
    }

    // 查询条件
    public function where($where = '')
    {
        $this->opt['where'] = " WHERE $where";
        return $this;
    }

    // 查询
    public function select()
    {
        // 拼装 sql
        $sql = 'SELECT ' . $this->field . ' FROM '. $this->table;
        $sql .= $this->opt['where'] ?? null;
        $sql .= $this->opt['limit'] ?? null;
        $sql .= $this->opt['offset'] ?? null;

        echo $sql . '<br>';

        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    // 插入
    public function insert($data)
    {
        $str = '';
        foreach ($data as $key => $value) {
            $str .= $key . ' = "' . $value . '",';
        }
        $sql = 'INSERT ' . $this->table . ' SET ' . trim($str, ',');
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        // 清空查询条件
        $this->opt['where'] = null;
        return $stmt->rowCount();
    }

    // 更新
    public function update($data)
    {
        // [a=>1,b=2] 'a=1, b=2'
        $str = '';
        foreach ($data as $key => $value) {
            $str .= $key . ' = "' . $value . '", ';
        }
        $sql = 'UPDATE ' . $this->table . ' SET ' . rtrim($str, ', ');
        $sql .= $this->opt['where'] ?? die('禁止无条件更新');
        echo $sql;
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        // 清空查询条件
        $this->opt['where'] = null;

        return $stmt->rowCount();
    }

    // 删除
    public function delete()
    {
        $sql = 'DELETE FROM ' . $this->table;
        $sql .= $this->opt['where'] ?? die("禁止无条件删除");

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        // 清空查询条件
        $this->opt['where'] = null;

        return $stmt->rowCount();
    }
}

$db = new Db('mysql:dbname=phpedu', 'root', 'root');
//$res = $db->table('staff')->field('id, name, email')->select();

$res = $db->table('staff')
    ->field('id, name, email')
    ->where('id > 5')
    ->limit(3)
    ->page(2)
    ->select();

require 'helper.php';
p($res);
echo '<hr>';


$n = $db->table('staff')->insert(['name' => 'Jack', 'email' => 'jack@php.cn', 'sex' => 1]);
echo $n > 0 ? '新增成功<br>' : '新增失败或没有数据被添加<br>';


$n = $db->table('staff')
    ->where('id = 3')
    ->update(['name' => 'zhu']);
echo $n > 0 ? '更新成功<br>' : '更新失败或没有数据被更新<br>';


$n = $db->table('staff')
    ->where('id = 3')
    ->delete();
echo $n > 0 ? '删除成功<br>' : '删除失败或没有数据被删除<br>';


















