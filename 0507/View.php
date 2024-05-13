<?php

namespace phpcn3;

class View
{
    // 约定: 控制器方法的模板,默认以控制器为目录名, 以方法为文件名
    // user 目录对应控制器user，hello.php 文件对应hello方法

    protected $controller;
    protected $action;
    protected $path;

    // 模板变量容器
    protected $data = [];

    // 初始化时创建模板的路径
    public function __construct($controller, $action, $path = '/view/')
    {
        $this->controller = $controller;
        $this->action = $action;
        $this->path = $path;
    }

    // 模板赋值
    // 将模板赋值与模板渲染二合一
    public function assign($name, $value)
    {
        // $name 是 外部变量 在模板文件 中的变量名
        // $value 就是 模板变量的值
        extract($this->data);
        $this->data[$name] = $value;
    }


    // 模板渲染（调用）
    public function render($name = null, $value = null, $path = '')
    {
        // 展开模板变量数组
        if ($name && $value) $this->assign($name, $value);
        extract($this->data);
        if (empty($path)) {
            // 按约定规则来生成模板文件的路径并加载它
            $file = __DIR__ . $this->path . $this->controller . '/' . $this->action . '.php';
        } else {
            $file = $path;
        }

        file_exists($file) ? include $file : die('视图不存在');
    }

}

$controller = 'user';
$action = 'hello';

$view = new View($controller, $action);

// 模板赋值: 变量
$view->assign('username', 'vk');

$items = [
    ['name' => '手机', 'price' => 5000],
    ['name' => '电脑', 'price' => 9000],
    ['name' => '相机', 'price' => 15000],
];

$view->render('items', $items);


$view->render('lang', ['php', 'java', 'python'], $path = '');



