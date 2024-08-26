<?php

// Assignment 4

/* 
Needed Output
10
09
08
07
06
05
04
03

*/

$start = 10;
$end = 0;
$stop = 3;


for ($i = $start; $i >= $end; $i--) {
  if ($i == $stop) {
      echo "0" . $i . "<br>";
      break;
  }
  
  if ($i < 10) {
      echo "0" . $i . "<br>";
  } else {
      echo $i . "<br>";
  }
}