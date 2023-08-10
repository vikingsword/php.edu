<?php
    $name = 'vikingar';
    echo $name . '</br>';
    echo 123 . '</br>';
    var_dump($name);
    echo '</br>';
    $name = 'sword';
    echo $name . '<hr>';

    function getName($name){
        return $name . '</br>';
    }

    echo getName('123') . '</br>';

    function getTotal(float $price, $number = 1){
        return $price * $number;
    }

    echo 'total is '. getTotal(2.2) . '￥</br>';

    // 3. 模板自变量
    // 声明一个匿名函数、函数表达式
    $getTotalAmount = function(float $price, int $number = 1){
        return $price * $number;
        // 注意这是一个变量，要以分号结尾
    };

    echo "total is ". $getTotalAmount(12.1,3)." 元 <br>";
    echo "total is {$getTotalAmount(12.1,3)} 元 <br>";

    $temp = $getTotalAmount(1.1,10);
    echo "total is {$temp} 元</br>";
    // echo "total is ${temp} 元</br>";
    echo '<hr>';

    // 4. 参数太多 ---> 剩余参数
    $sum = function (float $a, float $b, float $c){
        return $a + $b + $c;
    };
    echo $sum(1,2,3) . '<br>';
    echo $sum(1,2,3,4,5) . '<br>';

    // $sum = function ()

    $sum = function(...$args){
        return array_reduce($args, function($a,$b){
            return $a + $b;
        });
    };
    echo $sum(1,2,3,4,5) . '<br>';

    $sum2 = function(...$args){
        return array_reduce($args, function($acc, $cur){
            return $acc + $cur;
        },0);
    };
    echo $sum2(1,2,3,4) . '<br>';


    // 5. 返回值  默认return返回单个值
    // 可以返回数组或对象
    $arr = [6,7,8,9];
    print_r($arr);
    echo '<br>';
    function getItem(array $arr, $value): array{
        return array_filter($arr, function($item) use ($value){
            return $item > $value;
        });
    };
    print_r(getItem($arr, 7));
    echo '<br>';

































