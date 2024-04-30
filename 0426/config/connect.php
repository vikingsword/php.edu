<?php
namespace pdo_edu;

use PDO;

$dbConfig = require 'database.php';
// 将关联数组中的每一个成员，打散成独立变量
extract($dbConfig);

// 1.dns
$tp1 = '%s:host=%s;dbname=%s;port=%s;charset=%s';
$args = [$type, $host, $dbname, $port, $charset];
$dns = sprintf($tp1, ...$args);
echo $dns;

// 2. 创建数据库对象
$db = new PDO($dns, $username, $password);
var_dump($db);

// 设置结果集的默认获取部分
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, Pdo::FETCH_ASSOC);
