<?php
// 数组回调函数
// 回调： 回头再调用, 函数的调用，依赖一个外部条件/事件

// ！过滤器
// array_filter: 仅返回数组中可转为true的元素集合
$arr = [
    150,
    'php',
    true,
    [4, 5, 6],
    (new class
    {
    }),
    [],
    null,
    false,
    '',
    0,
    '0'
];
$res = array_filter($arr);
printf('<pre>%s</pre>', print_r($res, true));

// 标量 ： 其中是单个值
$res = array_filter($arr, function($item){
    if($item){
        return is_scalar($item);
    }
});
printf('<pre>%s</pre>', print_r($res, true));
echo '<hr>';



// map
$arr = ['php', [3, 4, 5], (new class
{
    public $name = '电脑';
    public $price = 8888;
}), 15, 20];
printf('<pre>%s</pre>', print_r($arr, true));
$res = array_map(function($item){
    switch(gettype($item)){
        case 'array':
            $item = join(', ',$item);
            break;
        case 'object':
            $item = join(', ',get_object_vars($item));
            // $item = get_object_vars($item);
    }
    return $item;
},$arr);
printf('<pre>%s</pre>', print_r($res, true));



// 3. 归并
$arr = [10, 20, 30, 40, 50];
// acc 为累加器，cur 为计算的值, 从 0 开始累加
/**
 * 0,10
 * 10,20
 * 30,30
 * 60,40
 * 100,50
 */
$res = array_reduce($arr,function($acc,$cur){
    echo $acc, ',',$cur,'<br>';
    return $acc + $cur;
},0);
echo $res;
echo '<hr>';



// 4. array_walk
$user = ['id' => 10, 'name' => 'admin', 'email' => 'admin@php.cn'];
array_walk($user, function($value,$key,$color){
    printf('[%s]=<span style="color:%s">%s</span>',$key,$color,$value);
},'blue');









