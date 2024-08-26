<?php

// Assignment 5
/*
"index.php"
"index.php"
"index.php"
"index.php"
*/


echo basename(__FILE__);
echo basename($_SERVER['PHP_SELF']);
echo pathinfo(__FILE__, PATHINFO_BASENAME);
echo basename(dirname(__FILE__) . '/' . basename(__FILE__));