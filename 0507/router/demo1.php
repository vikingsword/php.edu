<?php
require __DIR__ . '/../helper.php';

// ! 路由: 从url中解析出控制器和方法,参数

// ! 方案1: get请求, 从查询字符串中解析出控制器,方法和参数
$url = 'http://php.edu/0507/router/demo1.php?c=user&a=hello';
// * 查询字符串:url问号后面的键值对: c=user&a=hello

// 1.parse_url()
p(parse_url($url));
p(parse_url($url)['query']);

// 2. $_SERVER['REQUEST_URI']
p($_SERVER['REQUEST_URI']);
p(parse_url($_SERVER['REQUEST_URI'])['query']);

// 3.$_SERVER['QUERY_STRING']
p($_SERVER['QUERY_STRING']);

// 为处理方便,将字符串转为数组

// 2. parse_str
// c = user & a = hello ===> ['c'=>'user', 'a'=>'hello']

parse_str($_SERVER['QUERY_STRING'], $params);
p($params);
// 过滤空值
p(array_filter($params));
$params = array_filter($params);

echo '<hr style="color: red">';

// 路由测试
class UserController {
    public static function hello($id = 1, $name = 'vk')
    {
        return "<h3>hello id = $id, name = $name</h3>";
    }
}

echo UserController::hello();

// 注： 这种根据参数顺序获取控制器的方法不够好，更改顺序就不生效了
// 约定, get参数中
// c 表示控制器
// a 表示控制器中的方法
// UserController
//echo 'params: ';
//p($params);
$controller = ucfirst(array_shift($params)) . 'Controller';
$action = array_shift($params);
p($controller);
p($action);
// http://php.edu/0507/router/demo1.php?c=user&a=hello&id=12&name=peter
echo call_user_func_array([$controller, $action], $params);

