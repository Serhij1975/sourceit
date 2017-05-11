<?php

function array_multiply(&$array, $multiplier)
{
    foreach ($array as $k => $v) {
        $array[$k] = $v * $multiplier;
    }
    return $array;
}

$arr = range(5, 9); // 5,6,7,8,9
array_multiply($arr, 0);

var_dump($arr);

