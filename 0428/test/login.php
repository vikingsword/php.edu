<!DOCTYPE html>
<html lang="zh-CN">
<?php
session_start();
if (isset($user)) echo '<script>alert("用户已经登录，不要重复登录"); location.href="index.php"</script>';
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户登录表单</title>
</head>

<body>

    <form action="handler.php?action=login" method="post">
        <fieldset style="display: inline-block;background:lightcyan">
            <legend>用户登录</legend>
            <p>
                <input type="email" name="email" placeholder="123@gmail.com">
            </p>
            <p>
                <input type="password" name="password" placeholder="不少于6位">
            </p>
            <p>
                <button>提交</button>
            </p>
        </fieldset>

    </form>

    <a href="register.php">如果没有账号请先注册</a>


</body>

</html>

