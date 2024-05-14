<?php
// 前台入口

namespace core;

// 获取当前的模块/应用名称   "admin"
define("APP_NAME", basename(__FILE__, '.php'));

//echo APP_NAME;

// 加载核心类库
require __DIR__ . '/core/APP.php';

// 启动框架
APP::run();



