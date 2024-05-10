<?php
// ! 主流路由解决方案: pathinfo
require __DIR__ . '/../helper.php';

$url = 'http://php.edu/0507/router/demo2.php?c=user&a=hello';
p(pathinfo($url));
// 这个pathinfo不是我们要的
// 我们真正需要的是位于脚本名demo2.php与?xxxx查询字符串之间的路径信息
$url = 'http://php.edu/0507/router/demo2.php/one/two/three?c=user&a=hello';
p(pathinfo($url));

//$_SERVER['PATH_INFO']
p($_SERVER['PATH_INFO']);

// 以单一入口为例
// index.php?m=模块,例如前台home,后台admin

// 单入口
// index.php/模块/控制器/方法
// index.php/module/controller/action

// 多入口
// 前台: index.php 做为入口  不需要模块, controller/action
// 后台: admin.php 做为入口, 不需要模块, controller/action

$url = 'http://php.edu/0507/router/demo2.php/admin/user/index';
p($_SERVER['PATH_INFO']);
p(explode('/', $_SERVER['PATH_INFO']));
p(array_filter(explode('/', $_SERVER['PATH_INFO'])));

p(explode('/', trim($_SERVER['PATH_INFO'], '/')));
$request = explode('/', trim($_SERVER['PATH_INFO'], '/'));
[$module, $controller, $action]  = $request;
printf('模块: %s <br> 控制器: %s<br>方法: %s<br>', $module, $controller, $action);

// 从pathinfo中解析出参数
$url = 'http://php.edu/0507/router/demo2.php/admin/user/index/1/admin';
// 1 -> id = 1
// admin -> name = admin
// 按顺序传递参数

$url = 'http://php.edu/0507/router/demo2.php/admin/user/index/id/1/name/admin';
// id/1 = id = 1
// name/admin -> name = admin
// 按键名进行传递

echo "<hr style='color: red'>";
$url = 'http://php.edu/0507/router/demo2.php/admin/user/index/id/12/name/admin';
require 'User.php';

// 调用: admin\User::index()
$className = $module . '\\' . ucfirst($controller);
p($className);

$params = array_splice($request, 3);
echo call_user_func_array([$className, $action], $params);

//p(array_chunk([1, 2, 3, 4, 5, 6, 7], 2));

$arr = array_chunk($params, 2);

$result = [];
foreach ($arr as $item) {
    [$key, $value] = $item;
    $result[$key] = $value;
}
p($result);
$result = array_filter($result);
p($result);

echo call_user_func_array([$className, $action], $result);










