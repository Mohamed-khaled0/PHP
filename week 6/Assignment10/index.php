<?php

// Assignment 10
/* 
Neded Output  

"2 + 10 = 12"
"4 + 6 = 10"
"5 + 5 = 10"
"6 + 4 = 10"
"10 + 2 = 12"
*/
      
$help_num = 4;
$nums = [2, 4, 5, 6, 10];

foreach($nums as $index => $number){
  $parallel_num = $nums[count($nums) - $index  - 1 ];
  echo $number . ' + '.  $parallel_num . " = ".  $number  +$parallel_num . "<br>" ;
  };