<?php
// Assignment 1 
echo (int) 15.2 + (int) 14.7 + (10.5 + 10.5); // 50
echo '<br>';
echo gettype ( (int) 15.2 + (int) 14.7 + (int) (10.5 + 10.5)) ; // Integer
echo '<br>';


// Assignment 2
echo gettype(100);
echo '<br>';
echo get_debug_type(100);

// Assignment 3

// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"
echo '<br>';
echo 'Hello \"Elzero" \\\\ """ We Love "$$PHP"';
echo '<br>';

// Assignment 4

/* Needed Output
We
Love
Elzero
Web
School
*/
echo '<br>';
echo nl2br("We \n Love \n Elzero \n Web \n School");
echo '<br>';


// Assignment 5
// Needed Output
/*
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
*/

echo '<br>';
echo nl2br(<<< 'now'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
now);

echo '<br>';

// Assignment 6
/* $something = "Programming";

echo <<<'code'
Hello \PHP\
We Love $something
        code;

[1] Fix The Error
[2] Remove 2 Characters To Get The Output

Needed Output
Hello \PHP\ We Love Programming 

*/
echo '<br>';

$something = "Programming";
echo <<<"code"
Hello \PHP\
We Love $something
code;
echo '<br>';


// Assignment 7

echo (int )"1 Hello PHP";
echo '<br>';
echo (gettype((int)"1Hello PHP"));
echo '<br>';

// Assignment 8
echo '<pre>';
print_r([
        "FrontEnd"=>[
            "html",
            "css"
        ],
        "JS"=>[
                "vuejs"=>[
                        2=>"v2",
                        3=>"v3"],
                        0=>"Reactjs",
                        1=>"Svelte"
    ],
    "backend"=>[
        0=>"php" ,
        1=>"mysql" ,
        2=>"Security"],
    0=>"git",
    1=>"github",
    "testing"=>[
        0=>"Unit Testing",
        1=>"End To End",
        2=>"Integration"],
        ]
);
echo '</pre>';
