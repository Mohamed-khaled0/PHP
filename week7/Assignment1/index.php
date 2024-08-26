<?php      

/* Assignment 1
Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh
*/



// Write Function Content Here

function greating($name ,$gender = ""){
  if($gender == "Male"){
    return "Hello Mr $name ";
  }else if ($gender == "Female"){
    return "Hello Miss $name ";
  }else{
    return "Hello $name ";
  }
}

echo greating("Osama" , "Male");
echo '<br>';
echo greating("Eman" , "Female");
echo '<br>';
echo greating("Sameh");

