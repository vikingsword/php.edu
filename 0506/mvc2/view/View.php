<?php
namespace phpcn;

class View {
    public function display($data)
    {
        // 1. 模板赋值
        $staffs = $data;
        
        // 2. 渲染模板
        include 'show.php';
    }
}