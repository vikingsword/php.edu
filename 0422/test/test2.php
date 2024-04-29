<?php
$arr = [1, 2, 3, 4, 5];
$sum = array_sum($arr);
printf('sum = %s <br>', $sum);

$res = array_search('3', $arr);
echo 'res = ' . $res . '<br>';

$mul = array_product($arr);
echo 'mul = ' . $mul . '<br>';

echo '<hr>';

array_push($arr, 6);
var_dump($arr);
echo '<hr>';

array_pop($arr);
var_dump($arr);
echo '<hr>';

$arr = [10, 20, 30, 40, 50];
$res2 = array_reduce($arr, function ($acc, $cur){
    echo $acc . ',' . $cur . '<br>';
    return $acc + $cur;
}, 0);
echo '<hr>';
echo 'res2 = '. $res2 . '<br>';

// 4. array_walk
$user = ['id' => 10, 'name' => 'admin', 'email' => 'admin@php.cn'];
array_walk($user, function($value,$key,$color){
    printf('[%s]=<span style="color:%s">%s</span>',$key,$color,$value);
},'blue');

