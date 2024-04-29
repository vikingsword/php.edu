<?php
// ! 1. 指针遍历
$stu = ['id' => 1, 'name' => 'Jack', 'course' => 'php', 'score' => 90];
printf('[%s]=>%s<br>', key($stu),current($stu));
next($stu);
printf('[%s]=>%s<br>', key($stu),current($stu));


echo '<hr>';

$stu2 = ['id' => 1, 'name' => 'Jack', 'course' => 'php', 'score' => 90];
if (count($stu2) > 0) {
    while (true) {
        printf('[%s]=>%s<br>', key($stu2), current($stu2));
        if (next($stu2)) continue;
        else break;
    }
} else {
    echo 'empty arr';
}

echo '<hr>';


$stu2 = ['id' => 1, 'name' => 'Jack', 'course' => 'php', 'score' => 90];
foreach ($stu2 as $key => $value) {
    printf('[%s]=>%s<br>', $key, $value);
}

echo '<hr>';

$users = [
    ['id' => 10, 'name' => 'Tony'],
    ['id' => 11, 'name' => 'John'],
    ['id' => 12, 'name' => 'Jerry'],
];
foreach ($users as $user) {
    printf('id = %s ; name = %s <br>', $user['id'], $user['name']);
}

echo '<hr>';


$stu3 = ['id' => 1, 'name' => 'Jack', 'course' => 'php', 'score' => 90];
while (true) {
    printf('key = %s, value = %s <br>', key($stu3), current($stu3));
    if (next($stu3)) continue;
    else break;
}








