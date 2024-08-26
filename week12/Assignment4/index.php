<?php

// Assignment 4

/* 
Needed Output
"From Epoch Time Till 1990-10-01 Is Approximately 7578 Days"
"From Epoch Time Till 1990-10-01 Is Approximately 20 Years"

*/

date_default_timezone_set('Africa/Cairo');

// Given date
$date = "1990-10-01";

$epochDate = new DateTime('1970-01-01');
$givenDate = new DateTime($date);

$diff = $epochDate->diff($givenDate);

$totalDays = $epochDate->diff($givenDate)->days;
$totalDaysIncludingFraction = $totalDays + ($diff->h / 24) + ($diff->i / 1440) + ($diff->s / 86400);

$totalYears = $totalDays / 365.25; // Considering leap years

echo "From Epoch Time Till $date Is Approximately " . number_format($totalDays, 0) ;
echo '<br>';
echo "From Epoch Time Till $date Is Approximately " . number_format($totalYears, 0) ;
