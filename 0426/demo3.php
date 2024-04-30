<?php

require __DIR__ . '/config/connect.php';

// 2. CURD: UPDATE 更新
// UPDATE 表名 SET 字段1=值1 ... WHERE 更新条件
$sql = 'UPDATE `staff` SET `sex` = ? WHERE `id` = ?';

$stmt = $db->prepare($sql);

$stmt->execute(['1', 2]);

if ($stmt->rowCount() > 0) {
    echo '修改成功';
} else {
    echo '修改失败';
    print_r($stmt->errorInfo());
}