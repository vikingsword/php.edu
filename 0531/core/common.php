<?php

namespace core;

function dump(...$data)
{
    foreach ($data as $item) {
        // true : 只返回，不打印
        $res = var_export($item, true);

        $style = 'border:1px solid #ccc;border-radius:5px;';
        $style .= 'background: #efefef; padding: 8px;';

        printf('<pre style="%s">%s</pre>', $style, $res);

    }
}

//dump(100);