<?php
namespace admin;

class User {
    public static function index($id, $name)
    {
        printf('id = %d, name = %s', $id, $name);
    }
}