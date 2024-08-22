<?php

// Assignment 7
/* 
echo calculate(20, 10); // 30
echo gettype(calculate(20, 10)); // Double
*/


function calculate(int $num_one, int $num_two) {
    return (double) ( $num_one + $num_two);
  }
  
  echo calculate(20, 10); // 30
  echo '<br>';
  echo gettype(calculate(20, 10)); // Double