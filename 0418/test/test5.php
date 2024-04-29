<?php

$arr = [4, 5, 6];
$a = 1;
$s = 'zs';

var_dump($arr, $a, $s);
echo '<br>';

$arr = ['手机', 5000, 3];
vprintf('品名: %s, 单价: %.2f 元, 数量: %d 部<br>', $arr);


$params = ['mysql', 'localhost', 'edu', '3306', 'utf8mb4'];
$dsn = vsprintf('%s:host=%s;dbname=%s;port=%s;charset=%s', $params);
$username = 'root';
$password = 'root';
echo $dsn;
$pdo = new PDO($dsn, $username, $password);
if ($pdo) echo '<h3>connect successfully</h3>';


$name = 'zs';
$temp_name = &$name;

$temp_name = 'ls';

echo $name . '<br>';




