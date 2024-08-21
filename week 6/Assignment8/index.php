<?php

// Assignment 8
/* 
Neded Output  
6
10
15
*/
      
$nums = [1, 13, 12, 20, 51, 17, 30];
foreach($nums as $numbers){
  if ($numbers %2==0){
    echo $numbers/2 . '<br>';
  }
}