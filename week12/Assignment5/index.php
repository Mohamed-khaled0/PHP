<?php

// Assignment 5
/*
Needed Output
1668020233
1668020233
1668020233
*/


$dateTime = new DateTime();
echo $dateTime->getTimestamp() . "<br>";


$microtime = microtime(true);
$timestamp = (int) $microtime;
echo $timestamp . "<br>";


$currentTimestamp = strtotime('now');
echo $currentTimestamp . "<br>";
?>
