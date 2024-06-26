<!DOCTYPE html>
<html lang="zh-CN">
<?php
$db = new PDO('mysql:dbname=phpedu', 'root', 'root');
$stmt = $db ->prepare('SELECT * FROM `staff` LIMIT 10');
$stmt->execute();
$staffs = $stmt->fetchAll();
foreach ($staffs as $staff) {
    printf('<pre>%s</pre>', print_r($staff, true));
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title</title>
</head>

<body>
<table border="1" cellspacing="0" cellpadding="5" width="400">
    <caption style="font-size: 1.2em;">员工信息表</caption>
    <thead bgcolor="lightcyan">
    <tr>
        <th>id</th>
        <th>姓名</th>
        <th>性别</th>
        <th>邮箱</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody align="center">
        <?php foreach ($staffs as [$id, $name, $sex, $email]) : ?>
            <tr>
                <td><?= $id ?></td>
                <td><?= $name ?></td>
                <td><?= $sex ? '女' : '男'?></td>
                <td><?= $email ?></td>
                <td>
                    <a href="">edit</a>
                    <a href="">delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>

</html>

<?php
// 数组解构,像ES6中也有
// list($a, $b, $c) = [100, 200, 300];
// 像ES6中一样,左边使用模板
// [$a, $b, $c] = [100, 200, 300];
// echo $a, $b, $c;
?>