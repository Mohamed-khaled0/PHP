<?php

/*  Assignment 2

$a = "10";

Needed Ouput
10
"integer"
10
"integer"
10
"integer"

*/

$a = "10";

echo +$a;
echo '<br>';
echo gettype(+$a);
echo '<br>';

echo (int)$a;
echo "<br>";
echo gettype((int)$a);
echo '<br>';

echo (integer)$a;
echo "<br>";
echo gettype((integer)$a);