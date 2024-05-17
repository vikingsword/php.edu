<?php

// 默认控制器 Index

// 命名空间与类文件所在的路径对应映射
namespace app\admin\controller;

use function core\dump;

// 用户自定义控制器, 应该继承自基类控制器

class IndexController extends BaseController
{

    // 默认方法
    public function index()
    {
        // 模板赋值
        // $this->view->assign('username', '张老师');
        // $this->view->assign('items', [1,2,3,4,5]);

        // 在模板渲染时的,同时赋值, 将二步合并成一步
        // 第一个参数 null, 将会按默认规则生成模板文件
        // 第二个参数是模板变量,默认以数组方式提供
        $arr = ['手机','电脑','平板'];
        $data = ['username'=>'王小六', 'items'=>$arr];
        $this->view->render(null, $data);
    }
}
