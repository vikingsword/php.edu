<?php
require __DIR__ . '/autoloader.php';

use demo1\src\admin\model\User;

echo User::index() . '<br>';

echo '完整类名' . User::class;