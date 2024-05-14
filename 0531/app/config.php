<?php

// 当前应用配置
return [
    // 应用配置
    'app' => [
        // 调试开关
        'debug' => false,

        // 默认控制器
        'default_controller' => 'Index',

        // 默认方法
        'default_action' => 'index',

        // 模板默认后缀
        'default_view_suffix' => 'php'
    ],

    // 数组库配置
    'database' => [
        // 数据库类型
        'type' => 'mysql',

        // 默认主机名
        'host' => '127.0.0.1',

        // 默认数据库
        'dbname' => 'frame',

        // 默认端口
        'port' => '3006',

        // 默认编码集
        'charset' => 'utf8',

        // 默认用户名
        'username' => 'root',

        // 默认用户密码
        'password' => 'root',

        // 每页默认显示数量
        'default_limit' => 10
    ]
];
