<?php

$arr = array ('red', 'yellow', 'blue', 'green');

// cannot return new Array
array_splice ($arr, 1, 2);

var_dump ($arr);

$arr2 = array ('red', 'yellow', 'blue', 'green', 'purple');

unset ($arr2[0], $arr2[3]);

var_dump ($arr2);

$arr3 = array ('Apple' => 100, 'Banana' => 200, "Chiku" => 300, "Orange" => 400);

// return new Array : index take value only
$newarr3 = array_diff ($arr3, [100, 400]);
var_dump ($newarr3);

// Remove last element
array_pop ($arr3);

var_dump ($arr3);

// remove first element
array_shift ($arr3);

var_dump ($arr3);



?>