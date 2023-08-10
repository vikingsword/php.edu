<?php
// ! 流程控制： 分支

$age = 20;
// * 1. 单分支
if ($age >= 18){
    echo '已成年<br>';
}


// * 2. 双分支
if ($age >= 18){
    echo '已成年<br>';
} else {
    echo '未成年<br>';
}
echo '<hr>';

// * 3. 多分支
$age2 = 15;
if ($age2 >= 18 && $age2 < 30)
    echo '123';
else if ($age2 >= 30)
    echo '456';
else 
    echo '000';
echo '<hr>';


// * 4. switch
$age3 = 39;
switch(true) {
    case $age3 >= 18 && $age3 < 30:
        echo '123';
        break;
    case $age3 >= 30:
        echo '456';
        break;
    default:
        echo '000';
}
