<?php
//  数组 二维数组 

// ? 数组的声明
$colors = ['red', 'green', 'blue'];
printf('<pre>%s</pre>', print_r($colors,true));
// 索引数组
$colors = [0=>'red', 1=>'green', 2=>'blue'];
// 关联数组
$user = ['id'=>5, 'name'=>'vikingar', 'score'=>30];
printf('<pre>%s</pre>', print_r($user,true));
echo $user['name'];

// 二者关系 
// 索引数组实际上关联数组的一个子集,只不过用了数字型的字符串
// $colors = ['0' => 'red', '1' => 'green', '2' => 'blue'];
// printf('<pre>%s</pre>', print_r($colors, true));
// echo $colors[1], '<br>';
// echo $colors['1'], '<br>';

// ? 数组的遍历
// 数组成员还可以是一个数组,多维数组: 二维数组
// 数据表的查询结果,就是用"二维数组"来表示
$users = [
    0 => ['id' => 1, 'name' => '猪老师', 'gender' => 0, 'age' => 18],
    1 => ['id' => 2, 'name' => '牛老师', 'gender' => 1, 'age' => 30],
    2 => ['id' => 3, 'name' => '狗老师', 'gender' => 0, 'age' => 35],
];

// foreach
// foreach (数组 as 键名 => 值){...}   键名可选
$table = '<table border="1" width="400" cellspacing="0" cellpadding="3" align="center">';
$table .= '<caption>用户信息表</caption>';
$table .= '<thead bgcolor="#ccc"><tr><th>id</th><th>用户名</th><th>性别</th><th>年龄</th></tr></thead>';
$table .= '<tbody align="center">';
// 遍历二维数组
foreach($users as $user){
    print_r($user);
    $table .= '<tr>';
    $table .= '<td>'.$user['id'].'</td>';
    $table .= '<td>'.$user['name'].'</td>';
    $table .= '<td>'.($user['gender']?'女':'男').'</td>';
    $table .= '<td>'.$user['age'].'</td>';
    $table .= '</tr>';
}
$table .= '</tbody></table>';
echo $table;
// foreach($user => $item){
//     echo $item;
// };


 