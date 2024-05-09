<?php
namespace phpcn;

// 框架的入口文件
// 访问入口文件, 实际上执行某个控制器中的某个方法,实现某种功能
// 执行入口文件,实际上就是调用控制器中的方法
require __DIR__ . '/controller/Controller.php';
require __DIR__ . '/model/Model.php';
require __DIR__ . '/view/View.php';

$model = new Model('mysql:dbname=phpedu', 'root', 'root');
$view = new View();
$controller = new Controller($model, $view);

echo $controller->index() . '<br>';
