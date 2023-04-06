<?php
$toys = ['doll', 'yoyo', 'truck'];
echo count($toys); //getting length of the array
echo in_array('doll', $toys); //used to look for an element, returns a true bool if exists and false otherwise
//add to array
$toys[] = 'ball';
array_push($toys, 'bat', 'cards' /*can add as many as we want*/);
array_unshift($toys, 'tedy'); //adding to begining
print_r($toys);
//remove from an array
array_pop($toys);//last element
array_shift($toys);//first element
unset($toys[1]); //removes a specific element with its index
print_r($toys);


//split the array into n chunks (parent will contain multiple smaller arrays of n elements)
$hunked = array_chunk($toys, 2);
print_r($hunked);

//concat.
$arr1 = [1,2,30];
$arr2 = [5,4,7];

$arr3 = array_merge($arr1, $arr2); 
$arr4 = [...$arr1,...$arr2]; //takes values from arr1 and arr2
print_r($arr3); 
print_r($arr4);

#combine fct 
$a = ['green', 'yellow', 'blue'];
$b = ['avocado', 'apple', 'blueberries'];
$c = array_combine($a, $b);
print_r($c);
$keys = array_keys($c); #array of keys
print_r($keys);


$flipped = array_flip($c); #arrays become vals and vice versa
print_r($flipped);

$numbers = range(1, 20); #creates an array of numbers
$new_num = array_map(function($number){
    return "Number ${number}";
}, $numbers);

#filtering
$LessThanTen = array_filter($numbers, fn($number) => $number <= 10);
print_r($LessThanTen);

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);
