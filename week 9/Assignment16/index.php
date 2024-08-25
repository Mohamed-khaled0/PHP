<?php

// Assignment 16
/* 
Neded Output  
Array
(
  [0] => 1
  [1] => 3
  [2] => 5
  [3] => 7
)
}
      
*/

$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
$nums = array_filter($mix, function($item) {
    return is_int($item);
});

$odd_nums = array_filter($nums, function($num) {
    return $num % 2 !== 0;
});

sort($odd_nums);


echo'<pre>';
print_r($odd_nums);

echo'</pre>';
