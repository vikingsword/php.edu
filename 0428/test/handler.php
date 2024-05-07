<?php

$db = new PDO('mysql:dbname=phpedu', 'root', 'root');
$sql = 'select * from user';
$stmt = $db->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($users as $user) {
    print_r($user);
}


$action = $_GET['action'];
echo $action;
switch (strtolower($action)) {
    case 'login':
        // login 流程
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            extract($_POST);
            $name = $_POST['email'];
            $password = $_POST['password'];
//            echo '<br>'.$name . '<br>' . $password . '<br>';
            // 使用use关键字，捕获外部变量 $email, $password, 从而可以在匿名函数内部使用
            $res = array_filter($users, function ($user) use ($email, $password){
               return $user['email'] === $email && $user['password'] === $password;
            });

            if (count($res) === 1) {
                $_SESSION['user'] = serialize(array_pop($res));
                exit('<script>alert("验证通过");location.href = "index.php"</script>');
            } else {
                exit('<script>alert("邮箱或者密码错误");location.href="index.php"</script>');
            }

        } else {
            exit('请求错误');
        }
    case 'logout':
        if (isset($_SESSION['user'])) {
            session_destroy();
            exit('<script>alert("退出成功"); location.href="index.php"</script>');
        }
    case 'register':
        // register 流程
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $md5_pwd = md5($password);
        $register_time = time();
        $sql = 'INSERT user SET name=?,email=?,password=?,register_time=?';

        $stmt = $db->prepare($sql);
        $stmt->execute([$name, $email, $md5_pwd, $register_time]);
        if ($stmt->rowCount() === 1) {
            echo '<script>alert("注册成功");locaton.href="index.php"</script>';
        } else {
            exit('<script>alert("注册失败");locaton.href="index.php"</script>');
        }

        break;

        break;
}