<?php

/*
    PHP has an exception model similar to that of other prog. languages. An exception can be thrown and caught within PHP
    Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block
*/

function inverse($x){
    if(!$x){
            throw new Exception('Division by zero');
    }

    return 1/$x;
}


try{
    echo inverse(0);
    echo inverse(0);
}catch(Exception $e){
    echo 'caught exception ', $e -> getMessage(), ' ';
}finally{
    echo 'first finally';
}