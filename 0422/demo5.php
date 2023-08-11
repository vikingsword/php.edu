<?php
// 查询与替换
// array_slice
$stu = ['id' => 101, 'name' => '无忌', 'age' => 20, 'course' => 'php', 'grade' => 80];
printf('<pre>%s</pre>', print_r($stu, true));
// 前2个
$res = array_slice($stu, 0, 2);
printf('<pre>%s</pre>', print_r($res, true));
 // 后两个
 $res2 = array_slice($stu, -2);
 printf('<pre>%s</pre>', print_r($res2, true));
echo '<hr>';

 // array_splice
$arr = [10, 28, 9, 33, 56, 21, 82, 47];
printf('<pre>%s</pre>', print_r($arr, true));
// 删除： 第2个位置删除2个
$res = array_splice($arr,1,2);
printf('<pre>%s</pre>', print_r($res, true));
// 输出剩余元素
printf('<pre>%s</pre>', print_r($arr, true));
echo '<hr>';

// 更新： 第2个位置删除2个，使用新的数据来替换掉它
$arr = [10, 28, 9, 33, 56, 21, 82, 47];
$res = array_splice($arr,1,2,['hello','world']);
printf('<pre>%s</pre>', print_r($res, true));
printf('<pre>%s</pre>', print_r($arr, true));
echo '<hr>';

// 添加: 第2个位置删除0个，传入的新数据会追加到当前位置的后面// 添加： 
$arr = [10, 28, 9, 33, 56, 21, 82, 47];
$res = array_splice($arr,1,0,['hello','world']);
printf('<pre>%s</pre>', print_r($res, true));
printf('<pre>%s</pre>', print_r($arr, true));





