<?php
spl_autoload_register(function ($class) {

    $prefix = 'think\\';

    $baseDir = __DIR__  . '/src/';

    $realClass = substr($class, strlen($prefix));

    $file = str_replace('\\', DIRECTORY_SEPARATOR, $realClass);
    $file = $baseDir . $file . '.php';

    file_exists($file) ? require $file : die('file not exist');

});