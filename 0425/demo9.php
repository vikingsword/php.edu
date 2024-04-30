<?php
namespace ns1;




spl_autoload_register(function ($class){
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__ . DIRECTORY_SEPARATOR . $path . '.php';
    require $file;
});

new \php\cn\Demo;