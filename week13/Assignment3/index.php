
<?php

// Assignment 3
/*
 Needed Output

 */
setcookie("site[color", "blue", 0, "/");
setcookie("site[font", "swat", 0, "/");

// Set a cookie for layout to be removed
setcookie("site[layout", "", time() - 3600, "/");

// Display the cookies
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

// Check if the cookies are set correctly and display message
if (isset($_COOKIE['site']['color']) && isset($_COOKIE['site']['font'])) {
    echo "Your Color Is " . $_COOKIE['site']['color'] . " And Your Font Is " . $_COOKIE['site']['font'];
}
