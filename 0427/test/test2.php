<!DOCTYPE html>
<html lang="zh-CN">
<?php
printf('<pre>%s</pre>', print_r($_FILES, true));
if (isset($_FILES['pic'])) {
    foreach ($_FILES['pic']['error'] as $key => $error) {
        if ($error === 0) {
            $tmp_name = $_FILES['pic']['tmp_name'][$key];
            $dest = 'upload/' . $_FILES['pic']['name'][$key];
            move_uploaded_file($tmp_name, $dest);
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

<form method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>多文件上传2</legend>
<!--        <input type="file" name="pic[]">-->
<!--        <input type="file" name="pic[]">-->
<!--        <input type="file" name="pic[]">-->

        <input type="file" name="pic[]" multiple>
        <button>上传</button>
    </fieldset>
</form>
</body>

</html>
