<?php
// 栈与队： 一个增删元素受限的数组(线性表)
// 1. 栈操作： 
// 仅限在尾部进行增删
$stack = [1,2,3];
printf('<pre>%s</pre>', print_r($stack,true));
array_push($stack, 4);
printf('<pre>%s</pre>', print_r($stack,true));
echo array_pop($stack);
printf('<pre>%s</pre>', print_r($stack,true));

// 仅限头部增删
array_unshift($stack,10);
printf('<pre>%s</pre>', print_r($stack,true));
echo array_shift($stack);
printf('<pre>%s</pre>', print_r($stack,true));

echo '<hr>';


// 2. 队： 尾部添加，头部删除
$queue = [];
// 入队
array_push($queue, 10,20,30);
printf('<pre>%s</pre>', print_r($queue,true));
// 出队
echo array_shift($queue);
printf('<pre>%s</pre>', print_r($queue,true));

// 2. 对： 头部添加， 尾部删除
array_unshift($queue, 40);
printf('<pre>%s</pre>', print_r($queue,true));
array_pop($queue);
printf('<pre>%s</pre>', print_r($queue,true));








