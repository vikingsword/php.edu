<?php

function getName($name){
    return $name;
}

echo getName('vikingar') . '<br>';

function getSum(...$args){
    return array_reduce($args, function($a,$b){
        return $a + $b;
    });
}
echo getSum(1,2,3,4) . '<br>';


$arr = [1,2,3,4,5];
function getValue(array $arr, $value) : array{
    return array_filter($arr, function($item) use ($value){
        return $item > $value;
    });
};
print_r(getValue($arr, 3)) . '<br>';



