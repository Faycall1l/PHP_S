<?php
//we create a fct using the keyword function 
//vars defined inside the fct are used only inside it 
//if we want to use a global var inside a fct we use the keyword global 
function print_hey(){
    echo 'hey <br>';
}
print_hey();

//fcts can take arguments 
$name = 'jiji';
function hey_name($name){
    echo 'hey ' . $name . '<br>';
}
hey_name($name);

// return
// can assign default values to args so that if we do not include them in the fct call, they would take those values
function sum($n1 = 5, $n2 = 5){
    return $n1 + $n2;
}
echo sum(5,6), sum();
//we can set anonymous fcts to variables 
$sub = function($n1, $n2){
    return $n1 - $n2;
};
echo '<br>' . $sub(6,5);

//arrow function (shorter way to assign anonymous fcts to vars)
$mult = fn($n1, $n2) => $n1 * $n2;
echo $mult(3,3);


?>

