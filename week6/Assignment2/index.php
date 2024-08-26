<?php

/*  Needed Output
2
4
6
8
10
12
14
16
18
20

*/

$index = 0;
for($i=$index;$i<=20;$i+=2){
    echo "$i <br>";
}

    while ($index < 20) :
        $index+=2;
        echo $index. "<br>";
    endwhile;


    
    do{
        $index+=2;
        echo $index. "<br>";

    }while($index < 20);