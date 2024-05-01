<!DOCTYPE html>
<html lang="zh-CN">
<?php
// $_FILES: PHP超全局变量数量, 保存着上传文件的全部信息
printf('<pre>%s</pre>', print_r($_FILES, true));

if (isset($_FILES['my_pic'])) {
    foreach ($_FILES['my_pic']['error'] as $key => $error) {
        if ($error === 0) {
            // 临时文件名
            $temp_name = $_FILES['my_pic']['tmp_name'][$key];
            // 原始文件名
            $name = $_FILES['my_pic']['name'][$key];
            // 目标文件名
            $dest = 'upload/' . $name;

            move_uploaded_file($temp_name, $dest);
            echo "<img src='$dest' width='200'>";
        }
    }
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>多文件上传2</title>
</head>

<body>
<form action="" method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend>多文件上传:批量上传</legend>
        <!-- multiple: 允许同时选择多个  -->
        <input type="file" name="my_pic[]" multiple>
        <button>上传</button>
    </fieldset>
</form>
</body>

</html>
