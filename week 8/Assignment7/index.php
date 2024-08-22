<?php

// Assignment 7
/* 

*/
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
echo implode("", array_filter($chars, 'is_string'));
