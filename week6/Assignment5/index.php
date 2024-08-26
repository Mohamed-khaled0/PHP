<?php

// Assignment 5
/*
Needed Output
2
3
4
*/

$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for ($i = $start; $i < count($mix); $i++) {
  if (is_numeric($mix[$i]) && $mix[$i] > $mix[$start]) {
      echo $mix[$i] . "<br>";
  }
}