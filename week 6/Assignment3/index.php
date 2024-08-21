
<?php

// Assignment 3
/*
 Needed Output
1
4
10
22
46
94
190
382
 */

    $num = 2;
    $i = 3;
while ($num < 520) {

    if ($num<3) {
        $num-=1;
        echo $num. "<br>";
    
    }
    $num+=$i;

    echo $num. "<br>";
    $i*=2;


    if ($num == 382 ) {
    break;
    }

}