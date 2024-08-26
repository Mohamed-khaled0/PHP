<?php      

/* 
Assignment 1
Needed Output
"1.37 Terabyte"
"0.46 "

*/

$driver= array("C:");

$total_size=0 ;
foreach($driver as $d) {
    $size = disk_total_space($d);
    $total_size+=$size;
}

$teraSize= $total_size/1024/1024/1024/1024;
$teraSize=round($teraSize,2);
echo $teraSize.  " Terabyte" ;


