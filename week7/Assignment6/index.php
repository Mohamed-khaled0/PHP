<?php

// Assignment 6
/*

Needed Output
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200
*/

function calculate ($num1 , $num2 , $operation = ""){
if ($operation == "a"){
  return $num1 + $num2;
} elseif ($operation == "s" || $operation == "subtract"){
  return $num1 - $num2;
}elseif ($operation == "multiply" ||$operation == "m"){
  return $num1 * $num2; 
} else {
  return $num1 + $num2;
}
};



echo calculate(10, 20); // 30
echo('<br>');
echo calculate(10, 20, "a"); // 30
echo('<br>');
echo calculate(10, 20, "s"); // -10
echo('<br>');
echo calculate(10, 20, "subtract"); // -10
echo('<br>');
echo calculate(10, 20, "multiply"); // 200
echo('<br>');
echo calculate(10, 20, "m"); // 200

echo('<br>' . '<br>');


// Anther Solution Using Switch
function calculate2($num1, $num2, $operation = 'add') {
  $operation = strtolower($operation[0]);

  switch ($operation) {
      case 'a': 
          return $num1 + $num2;
      case 's': 
          return $num1 - $num2;
      case 'm': 
          return $num1 * $num2;
      default: 
          return "Operation not recognized.";
  }
}

echo calculate(10, 20); // Output: 30
echo "<br>";
echo calculate(10, 20, "a"); // Output: 30
echo "<br>";
echo calculate(10, 20, "s"); // Output: -10
echo "<br>";
echo calculate(10, 20, "subtract"); // Output: -10
echo "<br>";
echo calculate(10, 20, "multiply"); // Output: 200
echo "<br>";
echo calculate(10, 20, "m"); // Output: 200