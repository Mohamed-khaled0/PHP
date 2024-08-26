<?php

// Assignment 4

/* 
Needed Output
Array
(
  [257] => int
  [258] => boolean
  [259] => float
  [272] => validate_regexp
  [277] => validate_domain
  [273] => validate_url
  [274] => validate_email
  [275] => validate_ip
  [276] => validate_mac
  [513] => stripped
  [514] => encoded
  [515] => special_chars
  [522] => full_special_chars
  [516] => unsafe_raw
  [517] => email
  [518] => url
  [519] => number_int
  [520] => number_float
  [523] => add_slashes
  [1024] => callback
)

*/

$filters = filter_list();

$filter_with_ids = [];

foreach ($filters as $filter) {
    $filter_id = filter_id($filter);
    
    $filter_with_ids[$filter_id] = $filter;
}

echo '<pre>';
print_r($filter_with_ids);
echo '</pre>';

