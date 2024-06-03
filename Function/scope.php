<?php

// Variable declared in global cannot access in function
// to access global varible we use global keyword;

/*

PHP also stores all global variables in an array called $GLOBALS[index].
The index holds the name of the variable. 
This array is also accessible from within functions and can be used to 
update global variables directly.

*/

$name = "Pallavi";

function getName () {
    // global $name; 

    echo $GLOBALS['name'];
}

// getName();

// Local scope : variable is only accessable in function only
function sum () {
    $sum = 0;
    for ($i = 0; $i < 5; $i++) {
        $val = readline ("Enter Number: ");
        $sum += (int) $val;
    }

    return $sum;
}

// echo "The sum of number is: ". sum();


/*  Static Scope : Normally after function execution 
    variables are deleted but if we want variables should 
    not deleted then we use Static keyword.
*/

function staticScope () {
    static $val = 0;
    $val++;

    echo "$val \n";
}

staticScope ();
staticScope ();
staticScope ();
staticScope ();


?>