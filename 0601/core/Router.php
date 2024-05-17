<?php
// 路由类

namespace core;

use function core\dump;

class Router
{
    public static function parse() :array
    {
        // 从URL中,解析出:控制器, 方法, 参数

        // 默认控制器,方法和参数
        $controller = CONFIG['app']['default_controller'];
        $action = CONFIG['app']['default_action'];
        $params = [];

        // 判断是否存在 pathinfo

        if (array_key_exists('PATH_INFO', $_SERVER) && $_SERVER['PATH_INFO'] !== '/') {
            // dump($_SERVER['PATH_INFO']);
            // dump(array_filter(explode('/', $_SERVER['PATH_INFO'])));
            $pathinfo = array_filter(explode('/', $_SERVER['PATH_INFO']));
            // dump($pathinfo);

            if (count($pathinfo) >= 2) {
                $controller = array_shift($pathinfo);
                $action = array_shift($pathinfo);
                $params = $pathinfo;
            } else {
                $controller = array_shift($pathinfo);
            }
        }

 
        // dump([$controller, $action, $params]);
        return [$controller, $action, $params];
    }
}
