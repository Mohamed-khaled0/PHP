<?php

// Assignment 17
/* 
Neded Output  
Array
(
  [0] => 5
  [1] => 1
  [2] => 6
  [3] => 2
  [4] => 4
  [5] => 3
)

 Example 2
Array
(
  [0] => 4
  [1] => 3
  [2] => 6
  [3] => 1
  [4] => 5
  [5] => 2
)
*/
      

$nums = [1, 2, 3, 4, 5, 6];

function fisherYatesShuffle(&$array) {
    $length = count($array);
    for ($i = $length - 1; $i > 0; $i--) {
        $j = rand(0, $i);
        list($array[$i], $array[$j]) = array($array[$j], $array[$i]);
    }
}

fisherYatesShuffle($nums);

echo'<pre>';
print_r($nums);
echo'</pre>';

