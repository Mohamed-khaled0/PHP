<?php

// Assignment 4

/* 
Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000
*/

function multiply (...$nums){
    $result = 1;
    foreach ($nums as $num){
        if (is_string($num) ){
            continue;
        }else if (is_float($num)){
            $num = (int)$num;
        }
        $result *= $num;
    }
    return $result ;
}

echo multiply(10, 20); // 200
echo '<br>';
echo multiply("A", 10, 30); // 300
echo '<br>';
echo multiply(100.5, 10, "B"); // 1000