<?php

/*  Needed Output 2
Array
(
  [h] => HTML
  [c] => CSS
  [j] => JavaScript
)

*/

$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];


echo'<pre>';
$codes = array_map("strtolower",$codes);
print_r(array_combine($codes , $means )) ;

echo'</pre>';
