<?php

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
