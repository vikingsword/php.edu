<?php

/**
 * 命名空间
 * 1. 一个文件中, 只允许声明一个命名空间并只写一个类
 * 2. 命名空间的命名,应该与成员的路径一致
 */

// 当前类文件的路径: php/cn/
//  和当前类的命名空间相似
namespace php\cn;

class Demo
{
}

echo Demo::class . '<br>';
