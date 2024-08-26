<?php

// Assignment 6
/*

Needed Output
Array
(
  [0] => A
  [1] => B
  [2] => C
  [3] => D
  [4] => E
  [5] => @
  [6] => @
  [7] => @
  [8] => @
  [9] => @
)
*/

$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;



echo'<pre>';
print_r(array_merge($chars, array_fill($zero, strlen($char) * strlen($char) +1, $char[0])));
echo'</pre>';
