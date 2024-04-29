<?php
$arr = [1,2.1,'123',true];
var_dump($arr);

$obj = new Class(111){
    private $salary;
    public function __construct($salary)
    {
        $this->salary = $salary;
    }

    public function __get($name)
    {
        return $this->salary;
    }
};
echo '<br>';
echo gettype($obj).'<br>';

//echo $obj->salary.'<br>';



