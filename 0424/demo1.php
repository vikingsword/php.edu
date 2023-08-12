<?php
// 文件包含
// 本质：

// 1. include
// 绝对路径
echo __DIR__;
echo '<br>';
// include 'inc/f1.php';
// 被包含文件共享作用域
include __DIR__ . '/inc/f1.php';

echo $username . '<br>';

// echo $email . '<br>';

$email = include __DIR__.'/inc/f1.php';
echo $email . '<br>';





// 2. require

$email = require __DIR__.'/inc/f1.php';
echo $email . '<br>';


// 3. include,require区别 
// 区别1
// include: 用到时再加载, 动态
// require: 应该写到顶部, 静态
// if(false) include __DIR__ . '/inc/f2.php';
// echo $site . '<br>';
// if (false) require __DIR__ . '/inc/f2.php';
// echo $site . '<br>'; 

//  区别2
// include: 加载失败,继续执行不中断
// requrie: 加载失败,中断退出
@include __DIR__ . '/inc/hello.php';
echo 'test' . '<br>';

// test2不显示
@require __DIR__ . '/inc/hello.php';
echo 'test2' . '<br>';

// include_once: 只包含一次
// require_once: 只包含一次

















