<?php
// ! 数据类型

// ? 1. 基本类型：不可分
// int / float
$age = 20;
$price = 12.1;

// string 
$name = '123';

// boolean
$isNull = false;


// ? 2. 复合类型： 数组、对象
// 数组
$arr = [1,2.1,'123',true,function(){},[12,2]];
// 对象
$obj = new Class(123){
    private $salary;
    public function __construct($salary){
        $this->salary = $salary;
    }

    // 访问器
    public function __get($name){
        return $this->salary;
    }
};
echo gettype($obj) . '<br>';
// 注意这里是逗号
//echo '工资是： ', $obj->salary;




//// ? 3. 特殊类型： null、资源
//// 1. null  2. 没赋值  3. unset()删除了一个变量
//$x;
//if(is_null($x)) echo 'Null';
//echo '<br>';
//$f = fopen('../index.php', 'r');
//echo gettype($f);
//echo '<br>';



// ? 4. 回调类型： callback

/**
 * php用字符串表示传递函数
 * 所以可以用任何方式来引用或者传递函数
 * 当成值、数据类型
 * 回调的表现形式，不仅仅是函数、对象方法、类方法
 * 接收回调用参数的函数或方法很多，array_filter
 */
function hello($name):string{
    return 'hello '. $name;
}
echo hello('vikingar'), '<br>';

// 回调的方式来调用函数，同步
echo call_user_func('hello', 'vikingar'), '<br>';
echo '<hr>';
// 函数作为对象方法
class Demo1{
    public function hello(string $name):string{
        return 'Hello '.$name;
    }
}
// 'hello'是对象方法，用对象访问
// echo call_user_func([对象,方法], 'vikingar')
echo call_user_func([(new Demo1()),'hello'],'sword');
echo '<br>';

// 类方法
class Demo2{
    public static function hello2(string $name):string{
        return 'Good Luck '.$name;
    }
}
echo call_user_func(['Demo2', 'hello2'], 'niemandea');





