<?php
setcookie('vikingar', 'Wsh');

echo $_COOKIE['vikingar'] . '<br>';

$_COOKIE['vikingar'] = 'abc';

echo $_COOKIE['vikingar'] . '<br>';

echo $_COOKIE['vik'] ?? 'null';




