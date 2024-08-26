
<?php

// Assignment 3
/*
 Needed Output
"Directory Programming/PHP Removed"
"Directory Programming Removed"
 */

function createDirectories($baseDir, $subDir) {
    // Create base directory if it doesn't exist
    if (!file_exists($baseDir)) {
        mkdir($baseDir, 0755, true);
        echo "Directory $baseDir created\n";
    }
    
    $fullPath = "$baseDir/$subDir";
    if (!file_exists($fullPath)) {
        mkdir($fullPath, 0755, true);
        echo "Directory $fullPath created\n";
    }
}

$baseDir = 'Programming';
$subDir = 'PHP';

createDirectories($baseDir, $subDir);
