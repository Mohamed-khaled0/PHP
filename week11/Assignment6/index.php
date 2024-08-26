<?php

// Assignment 6
/*

Needed Output
"Hello Elzero Web School"
"Hello Elzero Web School"
"Hello Elzero Web School"
"Hello Elzero Web School"
*/

$file = fopen('elzero.txt', 'r');
$line1 = fgets($file);
$line2 = fgets($file);
fclose($file);
echo trim($line1) . ' ' . trim($line2) . "\n";


$lines = file('elzero.txt');
echo trim($lines[0]) . ' ' . trim($lines[1]) . "\n";

$content = file_get_contents('elzero.txt');
$lines = explode("\n", $content);
echo trim($lines[0]) . ' ' . trim($lines[1]) . "\n";

$file = new SplFileObject('elzero.txt');
$line1 = $file->fgets();
$line2 = $file->fgets();
echo trim($line1) . ' ' . trim($line2) . "\n";