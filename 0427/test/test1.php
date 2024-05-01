<!DOCTYPE html>
<html lang="zh-CN">

<?php
    printf('<pre>%s</pre>', print_r($_FILES, true));
    foreach ($_FILES as $file) {
        if ($file['error'] === 0) {
            $dest = 'upload/' . $file['name'];
            move_uploaded_file($file['tmp_name'], $dest);
            echo "<img src='$dest' width='200'>";
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>多文件上传</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>多个文件上传</legend>
            <input type="file" name="pic1">
            <input type="file" name="pic2">
            <input type="file" name="pic3">
            <button>提交</button>
        </fieldset>
    </form>
</body>

</html>
