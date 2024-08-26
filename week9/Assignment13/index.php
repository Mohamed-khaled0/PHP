<?php

// Assignment 13
/*

Needed Output: 100
*/


$nums = [10, 100, -20, 50, 30];

$max = $nums[0];  
foreach ($nums as $num) {
    if ($num > $max) {
        $max = $num;
    }
}

echo $max;  

