<?php


function getName($name)
{
    return $name . '<br>';
}

$test = 'zs';
$temp = getName($test);

echo $temp;


function fun1(float $f1)
{
    echo $f1 * 2.2 . '<br>';
}

fun1(1.1);

function fun2(float $f1, $num = 2)
{
    echo $f1 * $num . '<br>';
}

fun2(2.2);

$test = function (float $f1, float $f2, float $f3) {
    return $f1 + $f2 + $f3 . '<br>';
};
echo 'this is : ' . $test(1.1, 2.2, 3.3);
echo 'this is : ' . $test(1.1, 2.2, 3.3, 4.4);


$sum = function (...$args) {
    return array_reduce($args, function ($a1, $a2) {
        return $a1 + $a2;
    });
};

echo 'sum = ' . $sum(1, 2, 3, 4, 5) . '<br>';

$arr = [1, 2, 3];
print_r($arr);


$arr2 = [1, 2, 3, 4, 5, 6, 7];

function filter(array $arr2, $val)
{
    return array_filter($arr2, function ($item) use ($val) {
        return $item > $val;
    });
}

$arr3 = filter($arr2, 3);
print_r($arr3);










?>

