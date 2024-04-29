<?php

$o = new Class(1234){
    private $salary;
    public function __construct($salary){
        $this->salary = $salary;
    }
    public function __get($name){
        return $this->salary;
    }
};
//echo $o->salary . '<br>';

function getname($name){
    echo $name;
}
echo call_user_func('getname', 'vikingar') , '<br>';


class Demo1{
    public function getName($name){
        return 'hello ' . $name;
    }
}

echo call_user_func([(new Demo1()), 'getName'], 'vikingar') , '<br>';

$object = new Demo1;
echo call_user_func([$object, 'getName'], 'vikingar'), '<br>';


echo '<hr>';


$colors = ['red', 'green', 'white'];
$list = '<ul>';
$i = 0;
while($i < count($colors)){
    $list .= "<li>{$colors[$i]}</li>";
    $i += 1;
}
$list .= '</ul>';
echo $list;

echo '<hr>';

for($i=0; $i < count($colors); $i++){
    echo $colors[$i] . '  ';
}

echo '<hr>';