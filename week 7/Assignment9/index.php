<?php

// Assignment 9
/* 
Neded Output  
echo $greet("Osama"); // Greetings

      
*/

$greet = function($name){
return "Greetings"; 
};

echo $greet("Osama"); // Greetings


echo '<br>';

// Arrow

$greetArrow = fn($name) => "Greetings";   
echo $greetArrow("Osama");