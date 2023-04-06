<?php
/////////////////////simple array/////////////////////////////
$nums = [1,5,12,6];
$objs = array('soap', 'blanket');

print_r($nums);//used to print arrs
echo $objs[0];//use indexing to access elements of thee array (starts with 0)
/////////////////////associative array///////////////////////
$colors = [
    1 => 'black',
    3 => 'pink',
    5 => 'red'
];

echo $colors[5];

//indexing would slightly change and we can use any type as an index
$veggies = [
    'green' => 'cucumber',
    'red' => 'tomatoes',
    'orange' => 'carrot'
];

echo $veggies['red'];

$human = [
    'name' => 'jj',
    'age' => 23,
    'height' => '2.23m'
];
echo $human['name'];
/////////////////////////multi-dim arrays///////////////////////
$people = [
    [
        'name' => 'jj',
        'age' => 23,
        'height' => '2.23m'
    ],
    [
        'name' => 'linda',
        'age' => 25,
        'height' => '1.56m'
    ],
    [
        'name' => 'gob',
        'age' => 23,
        'height' => '1.88m'
    ]
    ];

    echo $people[1]['name'];

    //we use json_encode to turn the array into a json object
    echo(json_encode($people));
