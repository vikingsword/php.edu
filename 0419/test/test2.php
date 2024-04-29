<?php

$test = 3;
if ($test > 3) {
    echo 'lt';
} elseif ($test < 3) {
    echo 'st';
} else {
    echo 'eq';
}
echo '<hr>';

$age2 = 15;
if ($age2 >= 18 && $age2 < 30)
    echo '123';
else if ($age2 >= 30)
    echo '456';
else
    echo '000';
echo '<hr>';


$i = 0;
while ($i < 3) {
    echo $i . '<br>';
    $i++;
}
echo '<hr>';


$animal = ['dog', 'cat', 'bird'];
$list = '<ul style="border:1px solid; background:violet">';
for ($j = 0; $j < count($animal); $j++) {
    $list .= "<li>{$animal[$j]}</li>";
}
$list .= '</ul>';
echo $list;
echo '<hr>';














