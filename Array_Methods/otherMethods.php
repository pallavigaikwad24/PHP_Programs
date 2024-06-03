<?php

$colors = array ('red', 'yellow', 'green', 'blue', 'pink', 'red', 'green');
$fruits = array ('DragonFruit' => 900, 'Pineapple' => 550,'Apple' => 100, 'Banana' => 200, "Chiku" => 300, "Orange" => 400);

echo sizeof ($colors); // size of array

$uniqueVal = array_unique ($colors); // remove duplicate values

$num = array (1,2,3,4,5);

$sum = array_sum ($num);
echo "\n".$sum ."\n";
var_dump ($uniqueVal);

$search =  array_search ('yellow', $colors); // return index;
$searchVal = array_search (550, $fruits);
echo  $search ."\n" . $searchVal ."\n";

$arrVal = array_values ($fruits);

var_dump ($arrVal);

// Create an array from variables and their values

$firstname = "Peter";
$lastname = "Griffin";
$age = "41";

$newArr = compact ('firstname', 'lastname', 'age');
var_dump ($newArr);

$filpedArr = array_flip ($fruits); // swap key to values and values to key

var_dump ($filpedArr);

$flowers = array ('Rose', 'Sunflower', 'Amaryllis', 'Daisy', 'Poppy', 'Lily', 'Marigold');

array_unshift ($flowers, 'Jasmine'); // Adding element to starting

var_dump ($flowers);

$arr1 = array (1,2,3,4,5);
$arr2 = array (6,7,8,9,10);

$mergedArr = array_merge ($arr1, $arr2); // Merge two array

var_dump ($mergedArr);

$key = array ("One", "Two", "Three");
$value = array (1,2,3);

$keyPair = array_combine ($key, $value);

var_dump ($keyPair);

$fruitesKeys = array_keys ($fruits);

var_dump ($fruitesKeys);

echo in_array ('Rose', $flowers);  // checking value in array

print_r (array_chunk($fruits, 3));

?>