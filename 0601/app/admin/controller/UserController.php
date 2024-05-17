<?php



// 命名空间与类文件所在的路径对应映射
namespace app\admin\controller;

use function core\dump;
use core\Db;

// 用户自定义控制器, 应该继承自基类控制器

class UserController extends BaseController
{
    public function index()
    {
        // 数据库
        // 查询构造器: 需要一个数据库操作入口类Db.惰性连接（默认你连接数1024）
        $users =  Db::table('user')->field('*')->select();

        dump($users);

        // 模板渲染
        $this->view->render(null, ['users'=>$users]);
    }
}
