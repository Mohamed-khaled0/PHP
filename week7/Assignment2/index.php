<?php

/*  Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP

*/

function get_arguments(){
    $args = func_get_args();
    $all = implode(' ', $args);
    return $all;
};

echo get_arguments("Hello", "Elzero", "Web", "School"); // Output: Hello Elzero Web School
echo "<br>";
echo get_arguments("I", "Love", "PHP"); // Output: I Love PHP