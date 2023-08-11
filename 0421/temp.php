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


$str = 'a,b,c,d';
$arr = explode(',',$str);
printf('<pre>%s</pre>', print_r($arr,true));

print_r($arr);
echo '<hr>';

$arr2 = ['a','b','c'];
echo join(',', $arr2) . '<br>';


$str3 = 'php.net';
echo substr($str3, 0, strpos($str3, '.')) . '<br>';
echo strpos($str3, '.') . '<br>';

echo substr($str3, -3, 3) . '<br>';
echo substr($str3, -3) . '<br>';
echo substr($str3,4) . '<br>';
echo '<hr>';

$class = '\admin\controller\User';
echo str_replace('\\', '/', $class)  . '<br>';
// $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
// echo $path;


$str4 = '   php.ne  t   ';
echo strlen($str4) . '<br>';
echo trim($str4) . '<br>';
echo str_replace(' ', '', $str4) . '<br>';
echo strlen(trim($str4)) . '<br>';

$str5 = "/hello/";
echo ltrim($str5, '/') . '<br>';
echo rtrim($str5, '/') . '<br>';

echo '<hr>';


$url = 'http://php.edu/0421/demo4.php?a=1&b=2&c=3&id=1';
printf('%s', print_r($arr, true));
// print_r($arr,true);
















