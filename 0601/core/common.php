<?php
// 公共函数库

namespace core;

// 快捷打印
function dump(...$data)
{
    foreach ($data as $item) {
        // true: 只返回不打印
        $result  =  var_export($item, true);
        // 自定义变量显示样式
        $style = 'border:1px solid #ccc;border-radius:5px;';
        $style .= 'background: #efefef; padding: 8px;';
        // 格化式打印
        printf('<pre style="%s">%s</pre>', $style, $result);
    }
}

// $a = 100;
// $a = 'hello';
// $a = ['hello', 'world', 'zhu'];
// dump($a);
