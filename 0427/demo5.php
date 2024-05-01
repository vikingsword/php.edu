<?php
// 1. 连接数据库
$db = new PDO('mysql:dbname=phpedu', 'root', 'root');

// 2. 当前页，在get参数中
// null 合并
$page = $_GET['p'] ?? 1;
echo '当前页： p = ' . $page . '<br>';

// 3. 每页显示数量
$num = 5;

// 4. 记录总数
$sql = 'SELECT COUNT(`id`) as `total` FROM staff';
$stmt = $db->prepare($sql);
$stmt->execute();

// 将某列的值与php变量绑定 , `total` => $total
$stmt->bindColumn('total', $total);
$stmt->fetch(PDO::FETCH_ASSOC);

echo "总记录数量： $total <br>";

// 5. 总页数
$pages = ceil($total / $num);
echo "总页数 $pages <br>";

// 6. 偏移量
// offset = (page - 1) * num
$offset = ($page - 1) * $num;
echo "偏移量 $offset <br>";

// 7. 分页数据
$sql = "SELECT * FROM `staff` LIMIT $offset, $num";
$stmt = $db->prepare($sql);
$stmt->execute();
$staffs = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (count($staffs) === 0) {
    echo "查询结果为空<br>";
}
foreach ($staffs as $staff) {
    extract($staff);
    printf('%d-%s-%s-%s <br>', $id, $name, $sex, $email);
}


