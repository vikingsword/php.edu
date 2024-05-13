<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title</title>
</head>

<body>

    <h2>user controller hello action</h2>
    <br>
    <h2>hello, <?= $username?></h2>

    <ul>
        <?php foreach ($items as ['name' => $name, 'price' => $price]) : ?>
            <li><?= $name ?> : <?= $price ?> 元</li>
        <?php endforeach ?>
    </ul>

    <ul>
        <?php foreach ($lang as $value) : ?>
            <li><?= $value ?></li>
        <?php endforeach ?>
    </ul>
    <hr>
</body>

</html>
