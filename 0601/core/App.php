<?php

// 框架应用的基础类,用于启动框架

namespace core;

class App
{
    public static function run()
    {
        // 1. 启动会话
        session_start();

        // 2. 公共函数库
        // DIRECTORY_SEPARATOR: 目录分隔符常量, 可以自适应当前操作系统
        require __DIR__ . DIRECTORY_SEPARATOR. 'common.php';

        // 3. 设置常量
        self::setConst();

        // 4. 注册类的自动加载器
        spl_autoload_register([__CLASS__, 'autoloader']);

        // 5. 路由解析
        [$controller, $action, $params] = Router::parse();

        // 6. 实例化控制器
        // 框架中, 视图目录 与 控制器 对应 , 模板文件 与 方法 对应的
        // IndexController  ---> index 目录
        // hello -> hello.php 模板文件对应

        // 在实例化控制器类之前, 先要得到视图类的实例
        // 定义默认的视图路径的入口
        // $path = '/app/admin/view';
        $path = ROOT_APP_PATH . DIRECTORY_SEPARATOR . APP_NAME . DIRECTORY_SEPARATOR . 'view'. DIRECTORY_SEPARATOR;
        // echo $path;

        // 视图实例化
        $view =  new View($path, $controller, $action);


       
        // 首字母大写, 加上后缀: Controller
        $controller = ucfirst($controller) . 'Controller';

        $controller = 'app\\' . APP_NAME . '\\controller\\' . $controller;
        // 控制器实例化
        $controller =  new $controller($view);
        // dump($controller);

        // 调用控制器中的方法,并传入指定的参数,完成页面的渲染
        echo call_user_func_array([$controller, $action], $params);
    }

    // 设置常量
    private static function setConst()
    {
        // 1. 框架核心类库的路径常量
        define('CORE_PATH', __DIR__);

        // 2.根路径/项目路径常量: C:\Users\Administrator\Desktop\fram
        define('ROOT_PATH', dirname(__DIR__));
        
        // 3. 所有应用的入口: app/
        define('ROOT_APP_PATH', ROOT_PATH. DIRECTORY_SEPARATOR.'app');
        
        // 4. 配置常量
        // 二级配置: 项目/框架级(默认) < 应用级(自定义)
        $defaultConfig =  ROOT_PATH . DIRECTORY_SEPARATOR.'config.php';
        $appConfig =  ROOT_APP_PATH . DIRECTORY_SEPARATOR.'config.php';
        define('CONFIG', require file_exists($appConfig) ? $appConfig : $defaultConfig);

        // 5. 设置调试开关
        // php.ini
        ini_set('display_errors', CONFIG['app']['debug'] ? 'Off' : 'On');
    }

    //  自动加载器(类)
    private static function autoloader($class)
    {
        // 类文件的命名空间,应该与类文件所在的路径存在一一对应关系
        // core\Controller.php
        $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

        file_exists($file) ?  require $file : die($class . ' 类文件找不到');
    }
}
