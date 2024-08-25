<?php

// Assignment 5
/*
Needed Output
100
*/


$nums = [5, 10, 20, 5, 30, 40];

$sum= array_sum(array_filter($nums,fn($num) => $num !=5 )); 

echo $sum;

