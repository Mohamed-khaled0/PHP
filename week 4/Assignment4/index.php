<?php

// Assignment 4

/* Needed Output

var_dump($a ? $b); // True
var_dump($c ? $a); // True
var_dump($a ? $b); // True
var_dump($a ? $b); // True
var_dump($a ? $c); // True
var_dump($a ? $c); // True
var_dump(gettype($a) ? gettype($b)); // True
var_dump(gettype($a) ? gettype($b)); // True
var_dump(gettype((float) $a) ? gettype($b)); // True
*/

$a = 10;
$b = 20;
$c = 15;

var_dump($a != $b); // True
echo '<br>';
var_dump($c > $a); // True
echo '<br>';
var_dump($a <> $b); // True
echo '<br>';
var_dump($a !== $b); // True
echo '<br>';
var_dump($a <= $c); // True
echo '<br>';
var_dump($a < $c); // True
echo '<br>';
var_dump(gettype($a) == gettype($b)); // True
echo '<br>';
var_dump(gettype($a) === gettype($b)); // True
echo '<br>';
var_dump(gettype((float) $a) !== gettype($b)); // True