<?php
/**
 * 命名空间: 解决了全局成员的命名冲突
 * 全局成员: 类/接口, 常量 , 函数
 */

require __DIR__ . '/inc/f1.php';

echo hello();

// 全局函数，不能重复声明
//function hello()
//{
//    return __FUNCTION__;
//}
echo '<hr>';

// const 不能重复声明
//const APP = '123';
echo APP;

// 类，接口 不能重复声明
//class Demo1{
//
//}


