<?php

// Assignment 4

/* 
Needed Output

*/

setcookie("site[color", "blue", 0, "/");
setcookie("site[font", "swat", 0, "/");


echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

if (isset($_COOKIE['site[color']) && isset($_COOKIE['site[font'])) {
    echo "Your Color Is " . $_COOKIE['site[color'] . " And Your Font Is " . $_COOKIE['site[font'];
}
