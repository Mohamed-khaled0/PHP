<?php

// Assignment 8
/* 
Neded Output  
Array
(
  [0] => A
  [1] => B
  [2] => C
  [3] => D
)
*/
      
$chars = ["A", "B", "C"];

array_push($chars , "D") ;
$chars [] = "D";
array_merge($chars,["D"]);
array_splice($chars, count($chars), 0, "D");

echo'<pre>';
print_r($chars);
echo'</pre>';