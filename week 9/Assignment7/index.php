<?php

// Assignment 7
/* 

*/

$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next($names);
next($names);
echo current($names) . "<br>"; // "Sayed"

end($names);

echo current($names) . "<br>"; // "Ali"

reset($names);

echo current($names) . "<br>"; // "Osama"

next($names);
next($names);
next($names);

echo current($names) . "<br>"; // "Mahmoud"

