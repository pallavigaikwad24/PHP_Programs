<?php

/*

Anonymous Functions are those funtions also known as closure or lamdla,
allow the creation of function which has no specified name.
    - Can be stored in function
    - Can return in function
    - Can be pass in a function
Syntax : 
    function () {
        block of statement;
    };
*/

// example

$getMsg = function () {
    echo "This is anonymous function";
};

// $getMsg ();


// To use global variable in Anonymous funtion "use" keyword is used.
$number = 100;

$getGlobalValue = function () use ($number) {
    echo "This is global Value: $number";
};

// $getGlobalValue ();

/**
 * In normal function we cannot able to pass function as argument.
 * Using closure we can pass function as argument
 */

$inputVal = 10;

function funArgument ($value) {
    echo "The sum of value is: " . $value();
}

funArgument (
    function () use ($inputVal) {
        $sum = 0;
        for ($i = 1; $i <= $inputVal; $i++) {
            $sum += $i;
        }
        return $sum;
    }
);

echo "\n";

/**
 * Returning Anonymous function
 */

function getName ($name) {
    return function () use ($name) {
        echo "Hello, My name is $name";
    };
}

$name = getName ("Pallavi");

$name();

?>