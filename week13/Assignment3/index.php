
<?php

// Assignment 3
/*
 Needed Output
11
9.5
-7
 */
$num1 = 11.5;
$num2 = 9.4898;
$num3 = -7.5;

$rounded_num1 = round($num1, 0, PHP_ROUND_HALF_DOWN);
$rounded_num2 = round($num2, 1);
$rounded_num3 = round($num3, 0, PHP_ROUND_HALF_UP);

echo $rounded_num1 . "\n"; 
echo $rounded_num2 . "\n";
echo $rounded_num3 . "\n";