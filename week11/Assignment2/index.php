<?php

/*  Needed Output 2

"Size In Megabyte Is 32"
"Size In Kilobyte Is 33261"

*/
function getFileSize($filePath) {
    $sizeInBytes = filesize($filePath);
    $sizeInMegabytes = $sizeInBytes / (1024 * 1024);
    $sizeInKilobytes = $sizeInBytes / 1024;
    return array($sizeInMegabytes, $sizeInKilobytes);
}

$filePath = 'path_to_your_video_file'; 
list($sizeInMegabytes, $sizeInKilobytes) = getFileSize($filePath);

echo "Size In Megabyte Is " . intval($sizeInMegabytes) . "\n";
echo "Size In Kilobyte Is " . intval($sizeInKilobytes) . "\n";
