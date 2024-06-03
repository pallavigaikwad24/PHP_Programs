<?php

/*
    sort() - sort arrays in ascending order
    rsort() - sort arrays in descending order
    asort() - sort associative arrays in ascending order, according to the value
    ksort() - sort associative arrays in ascending order, according to the key
    arsort() - sort associative arrays in descending order, according to the value
    krsort() - sort associative arrays in descending order, according to the key
 */
$colors = array ('red', 'yellow', 'green', 'blue', 'pink');

$fruits = array ('DragonFruit' => 900, 'Pineapple' => 550,'Apple' => 100, 'Banana' => 200, "Chiku" => 300, "Orange" => 400);

sort ($colors);
rsort ($colors);

asort ($fruits); // sort ascending for values

ksort ($fruits); // sort ascending for keys

arsort ($fruits); // sort descending for values

krsort ($fruits); // sort descending for keys 

// var_dump ($colors);
var_dump ($fruits);

?>