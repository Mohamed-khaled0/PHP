<?php

// Assignment 14
/* 
-20
*/



$nums = [10, 100, -20, 50, 30];

$min = $nums[0];  
foreach ($nums as $num) {
    if ($num < $min) {
        $min = $num;
    }
}

echo $min;  

