<?php


class User1
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function getUser()
    {
        echo 'name = '. $this->name . '<br> age = ' . $this->age;
    }

}

$user1 = new User1('zs', 11);
$user1->getUser();
echo '<hr>';

class User2 {
    private static $name;

    public function getName()
    {
        echo 'name = '.self::$name;
    }

    public function __construct($name)
    {
        self::$name = $name;
    }
}


$user2 = new User2('ls');
$user2->getName();