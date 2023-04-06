<?php
/*----------------for loop ---------------*/

/*
**syntax
for(init; condition; increment){
    //code to excute
}
*/
for($x = 0; $x <= 10; $x++){
    echo $x;
}//displays numbers from 0 to 10

/*-----------------while loop---------------*/

/*
**syntax
while(condition){
    //code to be excuted
}
*/
$x = 1;
while($x <= 10){
    echo $x;
    $x++;
}
/*--------------------------Do while loop----------------*/

/*
** syntax
do{
    //code to excute
}while(condition);
 
//the block will be excuted once before checking the condition
*/
$x = 2;
do{
    echo $x;
    $x++;
}while($x > 5);

/*----------------Foreach loop-------------------------------*/
/*
**syntax
    foreach($array as $value){
        //code to be excuted
    }
    //used to loop thru arrays
*/

$posts = ['1st post ', '2nd post ', '3rd post '];
foreach($posts as /*adding index is opptional */$index=>$post){
        echo '<br>' . $index . ' - ' . $post;
}