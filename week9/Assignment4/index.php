<?php

// Assignment 4

/* 
Needed Output
60
60

*/

$nums = [10, 20, 30];


print_r(array_sum($nums));
echo'<br>';
print_r(array_reduce($nums , function($num1,$num2 ){
    return  $num1+ $num2 ;
}));
 echo'</br>';
 