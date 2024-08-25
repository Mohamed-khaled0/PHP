
<?php

// Assignment 3
/*
 Needed Output
Array
(
  [as] => Ahmed Samy
  [mg] => Mahmoud Gamal
  [om] => Osama Mohamed
  [ag] => Ahmed Gamal
)
 */

$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
  ];


 echo'<pre>';
 $friends = (array_flip($friends));
 print_r(array_change_key_case($friends));
 echo'</pre>';
 