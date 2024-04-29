<?php
class Query {
    public function table($table)
    {
        return $this;
    }


    public function where($where)
    {
        return $this;
    }

    public function find()
    {
        return ['id'=>1, 'name'=>'zs', 'email'=>'123@qq.com'];
    }

}


$query = new Query;

$query->table('123')->where('id', 1)->find();


class Db {
    public static function __callStatic($name, $arguments)
    {
        return call_user_func([(new Query), $name], $arguments);
    }
}

$res = Db::table('think')->where('id', 1)->find();
printf('<pre>%s</pre>', print_r($res, true));
