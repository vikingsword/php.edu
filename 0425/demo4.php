<?php
// 命名空间,使用namespace声明,必须写到第一行
//namespace ns1;

require __DIR__ . '/inc/f2.php';

function hello($name)
{
    return 'hello ' . $name;
}

// 如果指点命名空间，调用必须要进行指定
$res = \ns1\hello('zs');
echo $res;

