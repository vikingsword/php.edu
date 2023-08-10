<?php
// ! 字符串常用函数

// ? 1. string <-> array
// expload: string -> array
$str = 'a,b,c,d';
$arr = explode(',',$str);
printf('<pre>%s</pre>',print_r($arr,true));

// join: array -> string 
$colors = ['red', 'green', 'blue'];
echo join(', ',$colors). '<br>';
// echo implode(', ',$colors). '<br>';


// ? 2. 查询与替换
$str = 'php.net';
// "php"
echo substr($str,0,3) , '<br>';
// "net"
echo substr($str,-3,3), '<br>';
echo substr($str,-3), '<br>';

// strstr
$img = 'banner.png';
// ".png"
echo strstr($img,'.'), '<br>';
// banner
echo strstr($img,'.',true), '<br>';
$email = '123456@qq.com';
echo 'QQ:'.strstr($email,'@',true).'<br>';

// strpos
// 0: 索引，表示第一个字符就是，找到了
echo strpos('php.cn', 'p') . '<br>';
// 指定起点
echo strpos('php.cn','p',1) . '<br>';
// strpos 速度最快
echo strpos('php.cn','p',3) ? 'OK' : 'NOT FOUND' . '<br>';

// str_replace
// 带有命名空间的完整的类名
$class = '\admin\controller\User';
// 类的自动加载器
// 将这个类名->类的路径上, 然后用require
// '\admin\controllers\User' => '/admin/controllers/User.php';
$path = str_replace('\\', '/', $class) . '.php';
echo $path . '<br>';

$path = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
echo $path . '<br>';

// 违禁词
echo str_replace(['a','b','c'], '**', 'hello a, i am c，hello b') . '<hr>';


// ? 3. 删除指定字符
$str = 'php.net';
echo strlen($str) . '<br>';

$str = '  php.cn   ';
echo strlen($str) . '<br>';
echo strlen(trim($str)) . '<br>';

$path = '/0421/';
echo $path , ' -> ', trim($path, '/'). '<br>';
echo $path , ' -> ', ltrim($path, '/'). '<br>';
echo $path , ' -> ', rtrim($path, '/'). '<br>';

echo '<hr>';

$tags = '<h1>Hello world</h1><?php echo "给我一百万, 否则黑了你的服务器" ?>';
echo strip_tags($tags) . '<hr>';

// ? 4. url 相关
// printf('<pre>%s</pre>', print_r($_SERVER, true));
echo $_SERVER['QUERY_STRING'] .'<br>';
$arr = explode('&', $_SERVER['QUERY_STRING']);
printf('<pre>%s</pre>', print_r($arr, true));

// queryString -> array
parse_str($_SERVER['QUERY_STRING'], $arr);
printf('<pre>%s</pre>', print_r($arr,true));


$userArr = ['id' => 1, 'username' => 'admin', 'role' => 'manager'];
// id=1&username=admin&role=manage 
echo http_build_query($userArr) . '<br>';

printf('<pre>%s</pre>', print_r($_GET, true));



$url = 'http://php.edu/0421/demo4.php?a=1&b=2&c=3&id=1';

$arr = parse_url($url);
printf('<pre>%s</pre>', print_r($arr, true));

// echo $_SERVER['QUERY_STRING'];

echo '<hr>';

echo parse_url($url)['query'] . '<br>';

echo  parse_url($url)['query'] === $_SERVER['QUERY_STRING'] ? '相等' : '不等';





















