<?php

require __DIR__ . '/config/connect.php';

// 2. CURD: SELECT 单条查询
// SELECT 字段列表 FROM 表名 WHERE 查询条件
$sql = 'SELECT * FROM `staff` WHERE `id` < :id';

$stmt = $db -> prepare($sql);

$stmt -> execute([':id' => 3]);

//$staff = $stmt ->fetch();
//printf('<pre>%s</pre>', print_r($staff, true));


// PDO::FETCH_ASSOC: 结果集获取模式，只返回关联部分
while ($staff = $stmt->fetch()) {
    printf('<pre>%s</pre>', print_r($staff, true));
}
