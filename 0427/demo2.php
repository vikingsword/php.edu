<!DOCTYPE html>
<html lang="zh-CN">
<?php
//printf('<pre>%s</pre>', print_r($_FILES, true));
foreach ($_FILES as $file) {
    if ($file['error'] === 0) {
        $dest_file = 'upload/' . $file['name'];
        move_uploaded_file($file['tmp_name'], $dest_file);
        echo "<img src='$dest_file' width='200'>";
    }
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>多文件上传1</title>
</head>

<body>
<form action="" method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend>多文件上传:逐个上传</legend>
        <input type="file" name="my_pic1">
        <input type="file" name="my_pic2">
        <input type="file" name="my_pic3">
        <button>上传</button>
    </fieldset>
</form>
</body>

</html>
