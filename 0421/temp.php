<?php

$str = <<< TEXT
    <ul>
        <li>apple</li>
        <li>orange</li>
        <li>waterlemon</li>
    </ul>

TEXT;
echo $str;

$name = 'zs';
$test = 'abc';
$hello = function($name) use ($test){
    return $name . '    '. $test;
};
echo $hello($name) . '<hr>';

$name = 'ls';
$test = 'wu';
function myName($name):string{
    return $name .'  '.$GLOBALS['test'];
    
}
echo myName($name);