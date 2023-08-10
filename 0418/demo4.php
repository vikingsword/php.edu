<?php
// 变量传递
// ? 值传递
$name = 'vikingar'.'<br>';
$myName = $name;
echo $myName;

$myName = 'sword'.'<br>';
echo $myName;

printf('$name=%s  $myName=%s',$name, $myName);
echo $name == $myName ? '相等':'不相等';
echo '<br>';

// ? 引用传递
$yourName = &$name;
$yourName = 'sword';
echo $yourName === $name ? '相等':'不相等';
echo '<br>';
// 其实引用就是给原变量起个别名,并没有创建新变量