<?php      

/* 
"Asia/Riyadh"
"Wed, 09 Nov 22 - 07:11:22 PM"
"Wednesday, 09 November 2022 - 07:11:22 PM"
*/


date_default_timezone_set('Asia/Riyadh');

echo date_default_timezone_get() . "\n";

echo date('D, d M y - h:i:s A') . "\n";

echo date('l, d F Y - h:i:s A') . "\n";

