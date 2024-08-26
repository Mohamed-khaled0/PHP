
<?php

// Assignment 3
/*
 Needed Output
"From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
"From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"
 */

date_default_timezone_set('Africa/Cairo');

// Given date
$date = "1990-10-01";

$givenDateTimestamp = strtotime($date);

$epochTimestamp = strtotime('1970-01-01');

$diffInSeconds = $givenDateTimestamp - $epochTimestamp;

// Convert seconds to days
$diffInDays = $diffInSeconds / (60 * 60 * 24);

// Convert days to years
$diffInYears = $diffInDays / 365.25; 

// Print the results
echo "From Epoch Time Till $date Is Approximately " . number_format($diffInDays, 1) ;
echo '<br>';
echo "From Epoch Time Till $date Is Approximately " . number_format($diffInYears, 1) ;
