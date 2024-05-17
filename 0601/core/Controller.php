<?php

// 控制器类的基类

namespace core;

class Controller
{
    // 视图对象
    protected View $view;

    // 构造器
    public function __construct(View $view)
    {
        $this->view = $view;
    }
}
