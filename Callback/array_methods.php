<?php

$strings = ["apple", "orange", "banana", "coconut"];

function strLength ($item) {
    return strlen ($item);
}

$lengths = array_map ( "strLength", $strings );

print_r ($lengths);

function getOdd ($item) {
    return $item % 2 === 0;
}

$num = array (1,2,3,4,5,6,7,8,9);

$oddVal = array_filter ($num, "getOdd");

print_r ($oddVal);

// Reduce

$numArr = array (10,15,20,25);

function getSum ($val1, $val2) {
    return $val1 + $val2;
}

$sum = array_reduce ($numArr, "getSum", 5);

echo $sum;

?>