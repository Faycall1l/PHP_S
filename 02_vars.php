<?php
/*-----------PHP Datatypes--------------*/
/*
string      series of chars
int         whole numbers
float       decimal nums
bool        true or false
array       special vaar to hold more than one value
object      a class
null        empty variable
resource        holds a resource
*/


/*------------ Var rules ----------------*/
/*
Vars must be prefixed with $
must start with letter or underscore(can not start with numbers)
can contain only alpha-numeric characters and underscores
they are case-sensitive ($name and $NAME are different)
*/

$name = 'Blankon'; //str
$age = 22; //int
$is_happy = true; //bool
$avg = 12.3 ; //float
//we use concatination to parse variables for printing (using a period)
echo $name . ' is ' . $age . ' years old ';
//or we just use double quotes 
echo "$name is $age years old";
$x = '5' + '5'; //php will convert $x to an int 
var_dump($x);
/*
PHP can perform arithmetic on numeric types +, *, /, -, %
echo 5+5;
echo 5-5;
echo 10*5;
echo 5/5;
echo 12%5;
*/
define('HOST', 'localhost'); //define used to create constants
define('DB_NAME', 'test');

echo HOST;

?>