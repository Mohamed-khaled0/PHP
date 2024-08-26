<?php

// Assignment 4

/* Needed Output
"C:/xampp/htdocs"
"localhost"
"C:\WINDOWS"
"C:/xampp/apache/bin/openssl.cnf"
*/


echo  $_SERVER['HTTP_USER_AGENT'];
echo '<br>';
echo print_r($_SERVER['SERVER_NAME']);
echo '<br>';
echo $_SERVER['DOCUMENT_ROOT'];
echo '<br>';
echo php_uname();
