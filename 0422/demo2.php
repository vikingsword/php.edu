<?php
// 数组函数
// ! 1. 与值相关
$arr = [3=>10,9=>20,0=>'html','id'=>'css',20=>20,30];
printf('<pre>%s</pre>',print_r($arr,true));
printf('<pre>%s</pre>',print_r(array_values($arr),true));
// in_array
var_dump(in_array('id',$arr));
echo '<br>';

// array_search
echo array_search('20',$arr) . '<br>';
$key = array_search('20',$arr);
echo $arr[$key] . '<br>';

// array_unique: 去重(第二个重复的去掉了)
printf('<pre>%s</pre>',print_r(array_unique($arr),true));
echo '<hr>';


// ! 2. 统计
$arr2 = [1,2,3,4,5];
echo count($arr2) . '<br>';
// 求和
echo array_sum($arr2) . '<br>';
// 乘积
echo array_product($arr2) . '<br>';























