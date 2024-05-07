<?php
$db = new PDO('mysql:dbname=phpedu', 'root', 'root');
$sql = 'select * from staff';
$stmt = $db->prepare($sql);
$stmt->execute();

$staffs = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($staffs as $staff) {
//    printf('<pre>%s</pre>', print_r($staff['name']));
    echo $staff['name'] . '<br>';
}