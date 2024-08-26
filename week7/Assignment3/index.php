
<?php

// Assignment 3
/*
 Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40
 */

 function sum_all(...$nums){
    $result = 0;
    foreach ($nums as $num) :
        if($num == 5) {
            continue;
        }else if ($num == 10){
            $num = 20 ;
        } 
            $result += $num;
    endforeach;
    return $result;
 };

 echo sum_all(10, 12, 5, 6, 6, 10);
 echo '<br>';
 echo sum_all(5, 10, 5, 10);