<?php

/**
 * 1. 属性重载: __get(), __set()
 * 2. 方法属性: __call(), __callStatic()
 */
class User
{

    // 属性
    private $data = [
        // 'name' => 'vikingar'
        'age' => 20
    ];

    // 查询拦截器
    public function __get($name)
    {
        // $name : 属性名
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        return "属性 {$name} 不存在";
    }

    // 更新拦截器
    public function __set($name, $value)
    {
        // 1. 判断有无该属性
        if (array_key_exists($name, $this->data)) {
            // 2. 这个值是否合法？
            if ($name === 'age') {
                if ($value >= 18 && $value <= 60) {
                    $this->data['name'] = $value;
                } else {
                    echo '年龄不满足';
                }
            } else {
                // 以上操作仅对age有效,其它属性直接赋值
                $this->data['name'] = $value;
            }
        } else {
            // 没有这个属性不能外部动态创建
            echo '禁止动态创建属性';
        }
    }

    // 方法拦截器
    public function __call($name, $args)
    {
        // $name: 方法名, $args: 传给方法的参数
        printf('方法:%s<br>参数：<pre>%s</pre>', $name, print_r($args, true));
    }

    // 静态方法拦截器
    public static function __callStatic($name, $args)
    {
        // $name: 方法名, $args: 传给方法的参数
        printf('方法:%s<br>参数：<pre>%s</pre>', $name, print_r($args, true));
    }
}

$user = new User;

echo $user->name . '<br>';

/**
 * 为一个属性赋值的时候,必须要搞清楚2件事
 * 1. 有没有这个属性?
 * 2. 这个值是否合法?
 */
$user->age = 11;
// echo $user->age . '<br>';

echo '<hr color=red>';




// 常规方法/非静态方法/用实例调用,使用方法拦截器
$user->hello('vikingar', 'php');

// 使用静态方法拦截器
User::world(100, 200);














