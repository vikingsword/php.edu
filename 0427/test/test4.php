<!DOCTYPE html>
<html lang="zh-CN">
<?php
//printf('<pre>%s</pre>', print_r($_FILES, true));

if (isset($_FILES['pic'])) {
    $name = $_FILES['pic']['name'];
    $type = $_FILES['pic']['type'];
    $temp_name = $_FILES['pic']['tmp_name'];
    $error = $_FILES['pic']['error'];

    if ($error !== 0) {

        $tips = '<span style="color: red">upload failed</span>';
        switch ($error) {
            case 1:
                $tips .= '上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值';
                break;
            case 2:
                $tips .= '文件大小超过了上传表单中MAX_FILE_SIZE最大值';
                break;
            case 3:
                $tips .= '文件只有部分被上传';
                break;
            case 4:
                $tips .= '没有文件被上传';
                break;
            case 6:
                $tips .= '找不到临时目录';
                break;
            case 7:
                $tips .= '文件写入失败,请检查目录权限';
                break;
        }
        echo "<p>$tips</p>";

    } else {
        if (is_uploaded_file($temp_name)) {
            $allow_ext = ['jpg', 'jpeg', 'png', 'gif'];
            $ext = pathinfo($name)['extension'];
            $md5_name = pathinfo($name)['basename'];
            if (in_array($ext, $allow_ext)) {
                $path = 'upload/';
                $dest = $path . $md5_name . '.' . $ext;

                // upload and move file
                if (move_uploaded_file($temp_name, $dest)) {
                    echo '<p style="color: green">上传成功</p>';
                    // 预览文件 , 这里 echo 外部要用双引号
                    echo "<img src='$dest' width='300'>";
                } else {
                    echo '<p style="color: red">移动失败</p>';
                }
//            if (move_uploaded_file($temp_name, $dest)) {
//                echo '<p style="color: green">上传成功</p>';
//            } else {
//                echo "<span style='color: red'>move failed</span>";
//            }
            } else {
                echo '<p style="color: red">上传文件后缀非法</p>';
            }
        } else {
            echo '<p style="color: red">非法上传方式</p>';
        }
    }
}



?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文件上传</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>单个文件上传</legend>
        <!--        input 一定要有id-->
        <input type="file" name="pic" id="">
        <button>submit</button>
    </fieldset>
</form>
</body>
</html>