<?php

$str = 'Hello wrld';

#length of a str 
echo strlen($str);

#find the pos of the first occurence of the substr in the str
echo strpos($str, 'o');

#find the pos of the last occurence of the substr in the str
echo strrpos($str, 'l');

#reverse a string
echo strrev($str);

#convert all chars to lowercase
echo strtolower($str);

#convert all chars to uppercase
echo strtoupper($str);

#uppercase first char of each word
echo ucwords($str);

#string replace
echo str_replace('wrld', 'every1', $str);

#return a portion of a str specified by an offset and a len
echo substr($str, 0, 5);
echo substr($str, 5);#will give us the substr starting from 5

#starts with
if(str_starts_with($str, 'Hello')){
    echo 'Yes!!';
}

#ends with
if(str_ends_with($str, 'wrld')){
    echo 'Yes';
}

/////html entities and special chars (used for sec)
$str2 = '<h1>Hello</h1>';
echo htmlspecialchars($str2); #it will not treat the tags as a special chars

# specifiers
printf('%s likes %s', 'yazid', 'kids');
printf('1+1= %d',1+1);