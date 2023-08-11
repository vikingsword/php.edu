<?php
// 再谈数组遍历
// ! 1. 指针遍历
$stu = ['id' => 1, 'name' => 'Jack', 'course' => 'php', 'score' => 90];
// key() current()
printf('[%s]=>%s<br>',key($stu),current($stu));
next($stu);
printf('[%s]=>%s<br>',key($stu),current($stu));
next($stu);
printf('[%s]=>%s<br>',key($stu),current($stu));
next($stu);
printf('[%s]=>%s<br>',key($stu),current($stu));
echo '<hr>';
// 前移
prev($stu);
printf('[%s]=>%s<br>',key($stu),current($stu));
// 复位 第一个
reset($stu);
printf('[%s]=>%s<br>',key($stu),current($stu));
// 最后
end($stu);
printf('[%s]=>%s<br>',key($stu),current($stu));


echo '<hr>';


$stu = ['id' => 1, 'name' => 'Jack', 'course' => 'php', 'score' => 90];
// ! 2. 自动遍历
if(count($stu) > 0){
    while(true){
        printf('[%s]=>%s<br>',key($stu),current($stu));
        if(next($stu)) continue;
        else break;
        
    }
} else {
    echo '空数组';
}
echo '<hr>';


// ! 3. 快捷遍历
foreach($stu as $key => $value){
    printf('[%s]=>%s<br>',$key,$value);
}
echo '<hr>';
// foreach 还可以遍历对象


// ! 4. 解构遍历
// 索引数组
list($id, $name) = [10, 'Tony'];
// list 不是函数，因为函数不能放在等号左边， 不能用在“左值” 
printf('$id = %s, $name = %d<br>', $id,$name);

list('id' => $id, 'name' => $name) = ['id'=>10, 'name'=>'Tony'];
printf('$id = %s, $name = %d<br>', $id,$name);
echo '<br>';

// 解构通常用来遍历二维或以上的数组
$users = [
    ['id' => 10, 'name' => 'Tony'],
    ['id' => 11, 'name' => 'John'],
    ['id' => 12, 'name' => 'Jerry'],
];
// foreach
foreach($users as $user){
    // print_r($user);
    printf('$id=%s,$name=%s<br>',$user['id'],$user['name']);
}







