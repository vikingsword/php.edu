<?php
// 后台入口

namespace core;

// 1. 获取到当前模块/应用的名称 , "admin"
define("APP_NAME", basename(__FILE__, '.php'));

// echo APP_NAME;

// 2. 加载MVC框架的核心类库
require __DIR__ . '/core/App.php';

// 3. 启动框架
App::run();


// echo(B::$a);
