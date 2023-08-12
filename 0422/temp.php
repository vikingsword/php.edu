<?php
$stu = ['id' => 1, 'name' => 'Jack', 'course' => 'php', 'score' => 90];
printf('key=%s,value=%s <br>',key($stu),current($stu));
next($stu);
printf('key=%s,value=%s <br>',key($stu),current($stu));
echo '<hr>';


$stu = ['id' => 1, 'name' => 'Jack', 'course' => 'php', 'score' => 90];
while(true){
    printf('key=%s,value=%s <br>',key($stu),current($stu));
    if(next($stu)){
        continue;
    } else{
        break;
    }
}
echo '<hr>';

$stu = ['id' => 1, 'name' => 'Jack', 'course' => 'php', 'score' => 90];
if(count($stu) > 0) {
    while(true){
        printf('key=%s,value=%s <br>',key($stu),current($stu));
        if(next($stu)){
            continue;
        } else{
            break;
        }
    }
}else{
    echo 'empty array';
}
echo '<hr>';



$stu = ['id' => 1, 'name' => 'Jack', 'course' => 'php', 'score' => 90];
foreach($stu as $key => $value){
    echo 'key = '. $key . ', value = ' . $value . '<br>';
}
echo '<hr>';
foreach($stu as $value){
    echo 'value = ' . $value . '<br>';
}
echo '<hr>';



$arr = [3=>10,9=>20,0=>'html','id'=>'css',20=>20,30];
printf('%s  ', print_r(array_values($arr),true));
echo '<br>';
var_dump(in_array('css', $arr));
echo '<br>';
echo in_array(10, $arr);
echo '<br>';

echo array_search(20, $arr) . '<br>';
$key = array_search('html', $arr);
echo $arr[$key];
echo '<hr>';


$arr = [3=>10,9=>20,0=>'html','id'=>'css',20=>20,30];
printf('<pre>%s</pre>',print_r(array_unique($arr),true));
echo '<hr>';

$arr = [1,2,3,4,5];
echo count($arr) . '<br>';
echo array_sum($arr) . '<br>';
echo array_product($arr) . '<br>';
echo '<hr>';


$stack = [1,2,3];
echo array_push($stack, 4) . '<br>';
echo join(', ', $stack) . '<br>';

echo array_pop($stack) . '<br>';
echo join(', ', $stack) . '<br>';
echo '<hr>';



$arr = [30, 4, 82, 15, 20, 'abc', 'hello', 2, 46];
printf('原始:<pre>%s<pre>', print_r($arr,true));
sort($arr);
printf('升序:<pre>%s<pre>', print_r($arr,true));
rsort($arr);
printf('降序:<pre>%s<pre>', print_r($arr,true));
echo '<hr>';

$arr2 = [30, 4, 82, 15, 20, 'abc', 'hello', 2, 46];
printf('原始:<pre>%s<pre>', print_r($arr2,true));
asort($arr2);
printf('升序:<pre>%s<pre>', print_r($arr2,true));
arsort($arr2);
printf('降序:<pre>%s<pre>', print_r($arr2,true));
echo '<hr>';





