<?php

namespace core;


class Router {
    public static function parse():array
    {
        // 从 url 中解析出控制器，方法，参数 /admin.php/user/list?a=1&b=2
        // admin.php: script name ; /user/list: PATH_INFO ; ?a=1&b=2: queryString
        $controller = CONFIG['app']['default_controller'];
        $action = CONFIG['app']['default_action'];
        $params = [];

        // 判断是否存在 pathinfo
        if (array_key_exists('PATH_INFO', $_SERVER) && $_SERVER['PATH_INFO'] !== '/') {
            // dump($_SERVER['PATH_INFO']);
            // dump(array_filter(explode('/', $_SERVER['PATH_INFO'])));
            echo $_SERVER['PATH_INFO'];
            $pathinfo = array_filter(explode('/', $_SERVER['PATH_INFO']));
            dump($pathinfo);

            if (count($pathinfo) >= 2) {
                $controller = array_shift($pathinfo);
                $action = array_shift($pathinfo);
                $params = $pathinfo;
            } else {
                $controller = array_shift($pathinfo);
            }
        }


        return [$controller, $action, $params];
    }
}