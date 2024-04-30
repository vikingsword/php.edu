<?php

/**
 * 命名空间
 * 1. 一个文件中, 只允许声明一个命名空间并只写一个类
 * 2. 命名空间的命名,应该与成员的路径一致
 * 3. 类名,必须与类文件名对应
 */

namespace ns1;

require __DIR__ . '/autoloader.php';


class Demo2
{
}


// new \php\cn\Demo2;
echo Demo2::class . '<br>';
echo \php\cn\Demo2::class;
