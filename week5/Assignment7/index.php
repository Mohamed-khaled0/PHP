<?php

// Assignment 7
/* 
Needed Output
+ Operator 28
- Operator 18
/ Operator 4
/* Operator  115
Anything Else "Unknown Operation"
*/

$num_one = 23;
$num_two = 5;
$op = "*";

if ($op == "+") {
   echo $num_one + $num_two; //28
} elseif ($op == "-") {
    echo $num_one - $num_two; //18
}elseif ($op == "/") { 
    echo $num_one / $num_two; //4.6 
}elseif ($op == "*") {
    echo $num_one * $num_two; //115
}else {
    echo 'Unknown Operation';
}