<?php

// Assignment 7
/*
Hello Elzero Web
School
*/

$file = fopen("elzero.txt","r");
echo fgets($file,) . fgets($file);
fclose($file);

$file= file("elzero.txt",FILE_IGNORE_NEW_LINES);

echo implode(" ", array_slice($file,0,2));

$file =file_get_contents("elzero.txt");

echo implode(" " , array_slice(explode(PHP_EOL,$file),0,2)) ;
$file="elzero.txt";

$content= file_get_contents($file);
$content=str_replace("Osamaa","Elzero", $content);