<?php
// 如果指点命名空间，调用必须要进行指定
namespace ns1;

// 如果没有写命名空间,默认在全局
function hello($name)
{
    return 'Hello ' . $name;
}

