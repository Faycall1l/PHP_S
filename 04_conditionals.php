<?php
/*------------operators--------------*/
/*
    <  less than
    >   greater than
    <=  less than or equal 
    >=  greater than or equal
    ==  equal to
    !=  not equal to
    === identical to  
    !== not identical to
*/

/* -----------------if statements-----------------*/
/*
**syntax
if(condition){
    //code to be excuted if condition is true
}else if(new cond){
    //new code to excute
}else{
    //alternative if condition is false
}
*/

$age = 20;
if($age > 18){
    echo 'grown up !!!';
}else{
    echo 'here a candy';
}

$t = date("H");//returns the time depending on the pssed arg F for months, j for days and H for hours for instance
echo $t;
//eg of a greeting block depending on hours of the day 
if($t < 12){
    echo 'good morning';
}elseif($t < 17){
    echo 'good afternoon';
}else{
    echo 'good evening';
};
$posts = [];
//empty() checks wheather an array is empty
if(empty($posts)){
    echo 'no posts';
};
/*--------------------------- ternary op ------------------*/
/* 
** syntax
(condition)? [excute if true]:[excute if false];
*/
echo empty($posts)? 'no post':'posts exist';


/* 
when there is no else we use coolessing operation 
**syntax
[excute if true]??[excute if false];
*/

/*--------------------------switch statement--------------------------*/
$color = 'red';
switch($color){
    case 'red' :
        echo 'great';
        break;
    case 'blue' :
        echo 'less greater XD';
        break;
    //...
    default:
        echo 'still great';
};

