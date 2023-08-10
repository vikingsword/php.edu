<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>the relationship between php and html</title>
        
    </head>

    <body>
        <h2>Hello <span style="color: red;">vikingar</span></h2>

        <h2>Hello
            
            <!-- php 标签内部是 php 代码 -->
            <?php
                echo '<span style="color:red">vikingar</span>';
            ?>
        </h2>
        
    </body>
</html>