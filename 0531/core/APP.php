<?php
// 框架的基础类，用于启动框架

namespace core;

class APP
{
    public static function run()
    {
        // 1. 启动会话
        session_start();

        // 2. 公共函数库
        // DIRECTORY_SEPARATOR: 目录分隔符常量, 可以自适应当前操作系统
        require __DIR__ . DIRECTORY_SEPARATOR . 'common.php';

        // 3. 设置常量
        self::setCount();

        // 注册类的自动加载器

        // 路由解析

        // 实例化控制器


    }

    public static function setCount()
    {
        // 1. 框架核心类库的路径常量
        // E:\Dev\Mess\PHP\Project\php.edu\0531\core
        define("CORE_PATH", __DIR__);
        echo CORE_PATH ;

        // 2.根路径/项目路径常量:
        // E:\Dev\Mess\PHP\Project\php.edu\0531
        define("ROOT_PATH", dirname(__DIR__));
        echo ROOT_PATH ;

        // 3. 所有应用的入口: app/
        // E:\Dev\Mess\PHP\Project\php.edu\0531\app
        define("ROOT_APP_PATH", ROOT_PATH . DIRECTORY_SEPARATOR . 'app');

        // 4. 配置常量
        // 二级配置: 项目/框架级(默认) < 应用级(自定义)
        $default_config = ROOT_PATH . DIRECTORY_SEPARATOR . 'config.php';
        $app_config = ROOT_APP_PATH . DIRECTORY_SEPARATOR . 'config.php';
        define('CONFIG', require file_exists($app_config) ? $app_config : $default_config);

        // 5. 设置调试开关
        // php.ini
        ini_set('display_errors', CONFIG['app']['debug'] ? 'Off' : 'On');

    }





}