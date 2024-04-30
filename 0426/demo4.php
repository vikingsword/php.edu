<?php

require __DIR__ . '/config/connect.php';

// 2. CURD: DELETE 删除
// DELETE FROM 表名 SET 字段1=值1 ... WHERE 更新条件
// $sql = 'DELETE FROM `staff`  WHERE `id` = ? ';
// '?' : 匿名占位符
// 'string': 命名占位符
$sql = 'DELETE FROM `staff` WHERE `id` = ?';

$stmt = $db->prepare($sql);

$stmt->execute(['9']);

if ($stmt->rowCount() > 0) {
    echo '删除成功';
} else {
    echo '删除失败';
}
echo '<br>';


$sql2 = 'DELETE FROM `staff`  WHERE `id` = :id';

$stmt2 = $db->prepare($sql2);

// 如果条件来自外部， 例如 url 中 get 参数
// echo $_GET['id'];
$stmt2->execute([':id' => $_GET['id']]);

if ($stmt->rowCount() > 0) {
    echo 'id = ' . $_GET['id'] . ' 删除成功';
} else {
    echo '删除失败';
    print_r($stmt->errorInfo());
}
