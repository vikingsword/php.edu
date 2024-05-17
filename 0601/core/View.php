<?php

// 视图类的基类

namespace core;

class View
{
    // 视图默认目录
    protected string $defaultPath;

    // 当前控制器: 视图目录
    protected string $controller;

    // 当前控制器中的方法: 模板文件
    protected string $action;

    // 模板变量容器
    protected array $data = [];

    public function __construct(string $path, string $controller, string $action)
    {
        $this->defaultPath = $path;
        $this->controller = $controller;
        $this->action = $action;
    }

    // 模板赋值
    public function assign($key, $value)
    {
        if (is_array($value)) {
            $this->data = array_merge($data, $this->data) ;
        }
        $this->data[$key] = $value;
    }


    // 模板渲染
    public function render(string $path = null, array $data = null)
    {
        // 允许模板赋值与模板渲染同步完成
        // 考虑到原有模板变量数组中可能已有值,所以不能清空,只能合并
        $this->data =  $data ? array_merge($data, $this->data) : $this->data;

        // 如果没有传入自定义模板路径,就使用默认方法来生成: 控制器/视图.php
        $file = $path ?? $this->controller . DIRECTORY_SEPARATOR . $this->action;
        $file = $file . '.' . CONFIG['app']['default_view_suffix'];
        $file = $this->defaultPath . $file;
        // dump($file);

        // 模板赋值
        extract($this->data);

        // 渲染模板
        file_exists($file) ? include $file : die('模板不存在');
    }
}
