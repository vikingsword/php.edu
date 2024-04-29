<?php


function getName($name) {
    return $name . '<br>';
}

$test = 'zs';
$temp = getName($test);

echo $temp;


function fun1(float $f1) {
    echo $f1 * 2.2 . '<br>';
}

fun1(1.1);

function fun2(float $f1, $num = 2) {
    echo $f1 * $num . '<br>';
}

fun2(2.2);

$func1 = function fun3(float $f1, float $f2, float $f3) {
    
    echo $f1 + $f2 + $f3;
};





?>

