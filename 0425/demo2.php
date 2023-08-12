<?php
// 方法重载的小案例
// Db::table('think_user')->where('id', 1)->find();

// 1. 查询类
class Query
{
    public function table($table)
    {
        // 返回当前类实例，方便后面的链式调用
        return $this;
    }

    public function where($where)
    {
        return $this;
    }

    public function find()
    {
        // 不需要返回 $this,它最一个最终方法,输出查询结果
        // 用数组来模拟数据表的查询结果
        return ['id' => 1, 'name' => 'vikingar', 'email' => '123@qq.com'];
    }
}

$query = new Query;

// $query->table('think_user');
// $query->where('id', 1);
// $query->find();


$query->table('think_user')->where('id', 1)->find();

// 2. 入口类：实现请求转发
class Db
{
    // 静态方法重载 / 重定向
    public static function __callStatic($name, $args)
    {
        // $query = new Query;
        // return $query->$name($args);

        // 回调的方式来执行对象方法
        return call_user_func([new Query,$name],$args);
    }
}

$res = Db::table('think_user')->where('id', 1)->find();
printf('<pre>%s</pre>', print_r($res, true));






















