<?php

// Assignment 12
/*
Needed Output
100
*/

$nums = [11, 2, 10, 7, 20, 50];

$sum = 0;
foreach ($nums as $item) {
    $sum+= $item;
}

echo $sum;
