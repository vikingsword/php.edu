<?php

// 在初始化的时候定义工资
$obj1 = new class(123) {
    private $salary;

    public function __construct($salary)
    {
        $this->salary = $salary;
    }

    public function __get($name)
    {
        return $this->salary;
    }

    public function get()
    {
        return $this->salary;
    }

};

echo gettype($obj1) . '<br>';

echo 'salary : ', $obj1->get();
echo '<br>';


class Obj
{
    private $salary;
    private $age;

    public function __construct($salary, $age)
    {
        $this->salary = $salary;
        $this->age = $age;
    }

    public function __get($name)
    {
        return 123;
    }

    public function get()
    {
        return [$this->salary, $this->age];
    }

}

$obj2 = new Obj(1.1, 2);
echo 'age = '. $obj2->get()[1];
//$res = $obj2->get();
//print_r($res);


echo '<hr>';

function hello($name):string {
    return 'hello'.$name;
}

echo call_user_func('hello', 'vikingar');
echo '<hr>';


class Hello {
    public function test($name)
    {
        return 'hello '. $name;
    }
}

echo call_user_func([(new Hello()), 'test'], 'vikingar');
echo '<hr>';












