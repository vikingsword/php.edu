<?php
// 发一张好人卡给用户的访问终端
// 好人卡,就是用户使用设备的ID

// 开启一个会话
session_start();

/**
 * 执行二个动作
 * 1. 浏览器: PHPSESSID, 基于cookie
 * 2. 服务器: 创建一个与 PHPSESSID 同名的会话文件
 *      位置： E:\Dev\Mess\PHP\phpEnv\phpEnv\temp\php
 */

$_SESSION['email']  = 'admin@gamil.com';
$_SESSION['password'] = md5(md5('123'). 'php.cn123');

// $_SESSION = [];

// 直接将服务器上的会话文件删除
//session_destroy();


