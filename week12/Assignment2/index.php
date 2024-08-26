<?php

/*  Needed Output 2

"Africa/Cairo"
"2005, October, Sunday '02nd' 15:15:15"

*/


date_default_timezone_set('Africa/Cairo');

$date = "2005-10-02";

$dateTime = new DateTime($date);

$dateTime->modify('+15 hours');
$dateTime->modify('+15 minutes');
$dateTime->modify('+15 seconds');

echo date_default_timezone_get() . "\n";

echo $dateTime->format('Y, F, l \'d\' H:i:s') . "\n";

