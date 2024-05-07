<!DOCTYPE html>
<html lang="zh-CN">
<?php
printf('<pre>%s</pre>', print_r($_FILES, true));

if (isset($_FILES['pic'])) {
    foreach ($_FILES['pic']['error'] as $key => $error) {
        if ($error === 0) {
            $temp_name = $_FILES['pic']['tmp_name'][$key];
            $name = $_FILES['pic']['name'][$key];
            $md5_name = md5(pathinfo($name)['basename']);
            $ext = pathinfo($name)['extension'];
            $dest = 'upload/' . $md5_name . '.' . $ext;

            if (move_uploaded_file($temp_name, $dest)) {
                echo "<span style='color: green'>upload successfully</span>";
                echo "<img src='$dest' width='200'>";
            }
        }
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title</title>
</head>

<body>

</body>
    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>多文件上传</legend>
            <input id="" type="file" name="pic[]">
            <input id="" type="file" name="pic[]">
            <input id="" type="file" name="pic[]">
            <button>submit</button>
        </fieldset>
    </form>
</html>
