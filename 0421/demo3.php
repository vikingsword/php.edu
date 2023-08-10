<?php
// ! 字符串

// ? 1. 纯文本： 单引号
$domain = 'www.baidu.com';
echo $domain . '<hr>';

// ? 2. 纯文本语法糖： nowdoc
$str = <<< TEXT
    <header>
        <nav>
            <a href="">index</a>
            <a href="">video</a>
            <a href="">article</a>
        </nav>
    </header>

TEXT;
echo $str . '<hr>';

// ? 3. 模板： 双引号
$site  = "百度($domain)";
echo $site . '<br>';

// ? 4. 模板语法糖： heredoc
$tpl = <<< BAIDU
    <ul style="border:1px solid">
        <li>PHP中文网</li>
        <li>$domain</li>
    </ul>
BAIDU;
echo $tpl;