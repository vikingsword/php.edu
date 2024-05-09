<?php
// Require Composer's autoloader.
require 'vendor/autoload.php';

// Use the Medoo namespace.
use Medoo\Medoo;

// Connect to the database.
$database = new Medoo([
    'type' => 'mysql',
    'host' => 'localhost',
    'database' => 'phpedu',
    'username' => 'root',
    'password' => 'root'
]);

$database->insert('user', [
    'name' => 'foo',
    'password' => '123',
    'email' => 'foo@bar.com'
]);

$data = $database->select('user', [
    'name',
    'email'
], [
    'id[>]' => 1
]);

echo json_encode($data);

// [{
//    "user_name" : "foo",
//    "email" : "foo@bar.com",
// }]