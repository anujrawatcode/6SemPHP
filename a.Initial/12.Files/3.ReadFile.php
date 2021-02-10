<?php

$file = "example.txt";

if ($handle = fopen($file, 'r')) {
    $content = fread($handle, filesize($file)); // each byte equals to a character
    echo $content;
} else {
    echo "Can't write in the file";
}
