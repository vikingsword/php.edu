<?php
// cookie: 在客户端(浏览器)保存用户信息

// 第一次访问一个php脚本文件
// 那么这个php可以通过一个函数来给客户端设置cookie
// 服务器识别用户,是通过用户使用的终端/浏览器来识别
setcookie('username', 'vikingar');

echo $_COOKIE['username'] . '<br>';

$_COOKIE['username'] = 'admin';

echo $_COOKIE['username'] . '<br>';

unset($_COOKIE['username']);

echo $_COOKIE['username'] ?? '没找到'. '<br>';
