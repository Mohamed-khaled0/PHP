<?php      

/* 
Assignment 1
Needed Output
generateRandomNumber (11 to 19)
*/


function generateRandomNumber() {
  do {
      $random_number = rand(11, 19);
  } while ($random_number === 10 || $random_number === 19);

  return $random_number;
}

echo generateRandomNumber();
// or 
echo rand(11,19);

