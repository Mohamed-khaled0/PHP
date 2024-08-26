<?php

// Assignment 6
/*

Needed Output
http://www.elzero.org
http://elzero.org
https://elzero.org
https://elzero.org
*/

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

$clean_url1 = str_replace([' ', '¥'], '', $url1);
$clean_url2 = str_replace([' ', '¥'], '', $url2);
$clean_url3 = str_replace([' ', '¥'], '', $url3);
$clean_url4 = str_replace([' ', '¥'], '', $url4);

echo $clean_url1 . "\n";
echo $clean_url2 . "\n";
echo $clean_url3 . "\n";
echo $clean_url4 . "\n";
