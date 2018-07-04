<?php
$arr = array(2, 1, 3, 5, 4);
$n = count($arr);
for ($i = 0; $i < $n; $i++)
{
    $min = $i;
    for ($j = $i; $j < $n; $j++){
        if ($arr[$j] < $arr[$min]){
            $min = $j;
        }
    }

    $temp = $arr[$i];
    $arr[$i] = $arr[$min];
    $arr[$min] = $temp;
}
print_r($arr);
?>