<?php
// 循环结构,本质还是分支

$colors = ['red', 'green', 'blue'];
echo $colors[1] . '<br>';
// ? 1. 初始化循环变量，这里用索引当循环变量，$i=0;指向第一个数组元素
$i = 0;

// ? 2. 循环条件
// echo count($colors);
if ($i < count($colors)){
    echo $colors[1];
}
echo '<hr>';

// ? 3. 更新循环条件
/**
 * 循环三要素:
 * 1. 初始化循环变量: $i =0;
 * 2. 循环条件: $i < count($colors);
 * 3. 更新循环条件: $i = $i + 1
 */
$i = 0;
while($i < count($colors)){
    echo $colors[$i] . '<br>';
    // 更新条件
    $i = $i + 1;
}
echo '<hr>';


$list = '<ul style="border:1px solid; background:lightcyan">';
$i = 0;
while($i < count($colors)){
    $list .= "<li>{$colors[$i]}</li>";
    // $list .= '<li>'.$colors[$i].'</li>';
    // 更新条件
    $i += 1;
}
$list .= '</ul>';
echo $list;
echo '<hr>';

// do-while
$list = '<ul style="border:1px solid; background:lightgreen">';
$i = 0;
do{
    $list .= "<li>{$colors[$i]}</li>";
    // $list .= '<li>'.$colors[$i].'</li>';
    // 更新条件
    $i += 1;
}while($i < count($colors));
$list .= '</ul>';
echo $list;
echo '<hr>';


// for 可以看成 while 的语法糖
$list = '<ul style="border:1px solid; background:violet">';
for($i=0; $i < count($colors); $i++){
    $list .= "<li>{$colors[$i]}</li>";
}
$list .= '</ul>';
echo $list;
echo '<hr>';

// 中断或者跳过某次循环 break continue
$list = '<ul style="border:1px solid; background:pink">';
for($i=0; $i < count($colors); $i++){
    // 只输出前两个
    // if($i > 1) break;
    // 跳过第二个
    // if($i == 1) continue;
    $list .= "<li>{$colors[$i]}</li>";
}
$list .= '</ul>';
echo $list;
echo '<hr>';