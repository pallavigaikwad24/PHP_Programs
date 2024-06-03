<?php

// String methods
$statement = "Welcome to the PHP";

// Find length of the String
echo strlen($statement); // output:- 18
echo "\n";

// Count of words in String
echo str_word_count($statement);
echo "\n";

// To reverse String 
echo strrev($statement);
echo "\n";

// find the position of word in a string
echo strpos($statement, "to");
echo "\n";
echo strpos("Hello", "lo");
echo "\n";

// To replace string character with other character
echo str_replace("Welcome", "Hello world", $statement);
echo "\n";

// To repeat String
echo str_repeat($statement."\n", 3);
echo "\n";

// To convert into lowerCase
echo strtolower("HELLO");
echo "\n";

// To convert into uppercase
echo strtoupper("this is statement");
echo "\n";

// Trim
$name = "        Pallavi         ";
echo trim($name);
echo "\n";

// explode method is used to saperate string into array
$arrayVal =  explode(" ", $statement);
print_r($arrayVal);
echo "\n";

// String slicing using substr
echo substr($statement, 0, 7);
echo "\n";
// 11th index to last
echo substr($statement, 11);
echo "\n";
// fetching from last, -7 is position value from last and 3 is count of word
echo substr($statement, -7, 3);
echo "\n";
// From 8th till -4 index (negative start from last);
echo substr($statement, 8, -4);
echo "\n";
?>