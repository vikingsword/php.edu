<?php
// 用二维数组来模拟数据表查询结果集
$stus = [
    ['id' => 1, 'name' => '刘备', 'course' => 'js', 'score' => 83],
    ['id' => 2, 'name' => '关羽', 'course' => 'php', 'score' => 75],
    ['id' => 3, 'name' => '张飞', 'course' => 'js', 'score' => 52],
    ['id' => 4, 'name' => '孙权', 'course' => 'php', 'score' => 88],
    ['id' => 5, 'name' => '周瑜', 'course' => 'js', 'score' => 65],
    ['id' => 6, 'name' => '孔明', 'course' => 'php', 'score' => 53],
    ['id' => 7, 'name' => '赵云', 'course' => 'js', 'score' => 63],
    ['id' => 8, 'name' => '马超', 'course' => 'js', 'score' => 77],
    ['id' => 9, 'name' => '姜维', 'course' => 'php', 'score' => 93],
    ['id' => 10, 'name' => '黄忠', 'course' => 'js', 'score' => 81],
]
?>

<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php与html原生混编</title>

    <style>
        table {
            border-collapse: collapse;
            width: 360px;
            text-align: center;
        }

        table th,
        table td {
            border: 1px solid #000;
            padding: 5px;
        }

        table caption {
            font-size: 1.3em;
        }

        table thead {
            background-color: lightcyan;
        }

        .active {
            color: red;
        }
    </style>


</head>

<body>
    <table>
        <caption>学生成绩表</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>class</th>
                <th>score</th>
            </tr>
        </thead>
        <tbody>
            <!-- 显示用户数据-->
            <!-- php模板语法的目标: html与php代码分离 -->
            <!--使用短标签进行简化，只打印一个变量-->
            <!--当前是html环境-->

            <?php foreach($stus as $stu) : ?>
                <!-- <tr>
                    <td><?php echo $stu['id']?></td>
                    <td><?php echo $stu['name']?></td>
                    <td><?= $stu['course']?></td>
                    <td><?= $stu['score']?></td>
                </tr> -->

                <!--只输出成绩大于70分的-->
                <!-- <?php if($stu['score']>70) : ?>
                <tr>
                    <td><?= $stu['id']?></td>
                    <td><?= $stu['name']?></td>
                    <td><?= $stu['course']?></td>
                    <td class="active"><?= $stu['score']?></td>
                </tr>
                <?php endif?> -->

                <!--动态设置样式-->
                <!-- <tr>
                    <td><?= $stu['id']?></td>
                    <td><?= $stu['name']?></td>
                    <td><?= $stu['course']?></td>
                    <td class=<?= $stu['score'] < 60 ? "active":''?>><?= $stu['score']?></td>
                </tr> -->

                <!--动态设置样式，通过变量-->
                 <tr>
                    <td><?= $stu['id']?></td>
                    <td><?= $stu['name']?></td>
                    <td><?= $stu['course']?></td>
                    <?php $active = $stu['score'] < 60 ? 'active' : ''?>
                    <td class=<?= $active ?>><?= $stu['score']?></td>
                </tr>
            <?php endforeach?>


            
            
        </tbody>
    </table>
</body>

</html>
