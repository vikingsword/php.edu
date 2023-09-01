<?php

$name = 'vikingar';
echo $name;
echo '<br>';

var_dump($name);

echo '<hr>';

function getName($demo){
    return 'hello  ' . $demo;
}
echo getName('vikingar');


function get_total(float $price, float $count){
    return $price * $count;
}

echo '<br>';
echo get_total(1.2, 10) . '<br>';


function get_sum(...$args){
    return array_reduce($args, function($a, $b){
        return $a + $b;
    });
};
echo 'the sum is '.get_sum(1,2,3,4,5) . '<br>';

function get_sum2(...$args){
    return array_reduce($args, function($acc, $cur){
        return $acc + $cur;
    });
};

echo get_sum2(12,2,3,4) . '<br>';

var_dump('123', [123,123]);
echo '<br>';

$demo1 = '123';
$demo2 = 123;

echo $demo1 === $demo2 ? 'equal ' : 'not equal ';






























