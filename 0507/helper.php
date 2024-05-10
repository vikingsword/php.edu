<?php
function p($name)
{
    $type = gettype($name);
    switch (strtolower($type)) {
        case 'string':
        case 'integer':
        case 'double':
            echo $name . '<br>';
            break;
        case 'null':
        case 'boolean':
            echo  var_export($name) . '<br>';
            break;
        case 'object':
        case 'array':
            printf('<pre>%s</pre>', print_r($name, true));
            break;
        default:
            echo '未定义类型';
    }
}