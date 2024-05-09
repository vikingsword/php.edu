<?php

namespace phpcn;

//require __DIR__ . '/lib/Test1.php';
//require __DIR__ . '/lib/Test2.php';
//require __DIR__ . '/src/Test1.php';
//require __DIR__ . '/src/Test2.php';

// 使用composer的自动加载器
require __DIR__ . '/vendor/autoload.php';

echo \ns03\Test1::show() . '<br>';
echo \ns04\Test2::show() . '<br>';
echo \ns05\Test1::show() . '<br>';
echo \ns06\Test2::show() . '<br>';
echo \ns07\Test1::show() . '<br>';
//echo \ns08\Test2::show() . '<br>';

echo '<hr style="color: blue">';

echo DB['host'] . '<br>';
echo Help('name') . '<br>';
echo Help(['id'=>1, 'name'=>'admin']) . '<br>';


// PSR-4: 类的命名空间与类文件路径进行映射
echo \admin\controller\User1::fun();