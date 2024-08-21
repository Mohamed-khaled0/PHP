<?php

// Assignment 8
/* Neded Output  is Changing This IF TO SWITCH
switch($day) {
  case "Sat":
  case "Sun":
  case "Mon":
    echo "We Are Open All The Day";
    break;
  case "Tue":
  case "Wed":
    echo "We Are Open From 08:12";
    break;
  case "Thu":
  case "Fri":
    echo "We Are Closed";
    break;
  default:
    echo "Unknown Day";
}
      */
      
$day = "Sat";

if ($day == "Sat" || "Sun" || "Mon") { 
echo "We Are Open All The Day";
} elseif ($day == "Tue" || "Wed") {
    echo "We Are Open From 08:12";
}elseif ($day == "Thu" || "Fri") {
    echo "We Are Closed";
}else{
    echo "Unknown Day"; 
}

