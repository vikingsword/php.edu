<?php
// 查看与保存结果

// ? echo 后一定是字符串
// echo 输出字符串的保存结果，或者html
echo 'php vikingar <br> hello <h4> vikingar!</h4><br>';
echo 'hello '. implode(', ',[1,2,3,4,5]) . ' ! <br>';

// ? var_dump
// 值、类型、支持多个变量查看
var_dump(10,'php',[1,2,3],true);
echo '<br>';
// 不能用在生产环境

// ? 格式化打印
// 数组格式化
$arr = ['red', 'green', 'blue'];
var_dump($arr);
echo '<br>';
// 只查看值
print_r($arr);
// print_r($arr),不应该直接打印,而是应该返回一个字符串
// 传入第二个参数true,就不会打印输出,而是返回
echo '<pre>'. print_r($arr,true).'</pre>';
// C语言, 有一个printf(模板,模板中的变量)
// %s: string, %d: int, %f: float
printf('<pre>%s</pre>', print_r($arr,true));
// sprintf 只返回，不打印
sprintf('<pre>%s</pre>', print_r($arr,true));
// echo sprintf('<pre>%s</pre>', print_r($arr,true));

printf('品名: %s, 单价: %.2f 元, 数量: %d 部<br>', '手机', 5000, 3);
$arr = ['手机', 5000, 3];
vprintf('品名: %s, 单价: %.2f 元, 数量: %d 部<br>', $arr);
// 它也有一个只返回不打印的版本
echo vsprintf('品名: %s, 单价: %.2f 元, 数量: %d 部<br>', $arr);

// PDO: DSN
// new PDO($dsn, $usrname,$password);
// $dsn = 'mysql:host=localhost;dbname=phpedu;port=3306;charset=utf8';
$params = ['mysql', 'localhost', 'phpedu', '3306', 'utf8mb4'];
$dsn = vsprintf('%s:host=%s;dbname=%s;port=%s;charset=%s', $params);
$username = 'root';
$password = 'root';
echo $dsn;
$pdo = new PDO($dsn, $username, $password);
if ($pdo) echo '<h3>connect successfully</h3>';














