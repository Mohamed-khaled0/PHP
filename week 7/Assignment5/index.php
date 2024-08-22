<?php

// Assignment 5
/*
Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
*/

function check_status($a, $b, $c) {
  $name = "";
  $age = 0;
  $status = false;

  foreach ([$a, $b, $c] as $item) {
    if (is_string($item)) {
        $name = $item; 
    } elseif (is_int($item)) {
        $age = $item; 
    } elseif (is_bool($item)) {
        $status = $item; 
    }
}

if ($status) {
    return "Hello $name, Your Age Is $age, You Are Available For Hire";
} else {
    return "Hello $name, Your Age Is $age, You Are Not Available For Hire";
}
};




echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo '<br>';
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo '<br>';
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo '<br>';
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"