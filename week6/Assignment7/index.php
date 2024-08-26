<?php

// Assignment 7
/* 
1
2
3
4
"4 Numbers Printed"
"3 Letters Ignored"
*/


$numCount = 0;
$letterCount = 0;
$mix = [1, 2, "A", "B", "C", 3, 4];
foreach($mix as $numbers){
    if (is_numeric($numbers)){
        echo $numbers .'<br>' ;
        $numCount++;
    } else {
        $letterCount++;
    }

}
echo "\"$numCount Numbers Printed\"<br>";
echo "\"$letterCount Letters Ignored\"<br>";