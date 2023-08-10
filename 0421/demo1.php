<?php
// ! 作用域

// * php只有函数作用域,没有块作用, 函数之外全是全局作用域
if (true){
    $a = 10;
}
echo $a, '<br>';

$name = 'vikingar';
$hello = function() : string{
    // 函数中不可访问外部的变量
    return 'Hello ,' . $name;
};

echo $hello() . '<br>';


$name = 'vikingar';
$hello = function() : string{
    // 使用关键字 global引用一下外部变量
    global $name;
    return 'Hello ,' . $name;
};

echo $hello() . '<hr>';

$name = 'vikingar';
$hello = function() use ($name):string{
    // 使用关键字 global引用一下外部变量
    return 'Hello ,' . $name;
};

echo $hello() . '<hr>';


print_r($GLOBALS['name']);
echo '<hr>';



$name = 'vikingar';
$hello = function() use ($name):string{
    return 'Hello ,' . $GLOBALS['name'];
};
echo $hello() . '<hr>'; 



$name = 'vikingar';
$hello = function() use ($name):string{
    // 私有变量
    $name = 'sword';
    return 'Hello ,' . $name;
};
echo $hello() . '<hr>'; 






























