<?php

$db = new PDO('mysql:dbname=phpedu', 'root', 'root');
$sql = 'select * from user';
$stmt = $db->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($users as $user) {

}


