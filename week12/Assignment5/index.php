<?php

// Assignment 5
/*
Needed Output
"Not A Valid URL"
"Not A Valid URL"
"A Valid URL"
"Not A Valid URL"
*/


$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo filter_var($url1, FILTER_VALIDATE_URL) ? "A Valid URL\n" : "Not A Valid URL\n";
echo filter_var($url2, FILTER_VALIDATE_URL) ? "A Valid URL\n" : "Not A Valid URL\n";
echo filter_var($url3, FILTER_VALIDATE_URL) ? "A Valid URL\n" : "Not A Valid URL\n";
echo filter_var($url4, FILTER_VALIDATE_URL) ? "A Valid URL\n" : "Not A Valid URL\n";
