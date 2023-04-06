<?php

$file = 'extras/users.txt';
if(file_exists($file)){
    //echo readfile($file);
    $handle = fopen($file, 'r'); //used to handle files and can take diff modes depending on the second parameter('r' for reading for instance)
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
}else{
    $handle = fopen($file, 'w');//we are writing 'w'
    $contents = 'Nill' . PHP_EOL . 'Dall' . PHP_EOL . 'G';
    fwrite($handle, $contents);
    fclose($handle);
}