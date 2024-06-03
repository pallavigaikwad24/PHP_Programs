<?php

    $name = "Pallavi";
    echo "Welcome to the PHP $name \n";
    echo 'Welcome to the PHP $name \n'; // We can't able to write variable name in single quote it treat as a String. we need concatination
    echo 'Welcome to the PHP '. $name;
    echo "Welcome to the PHP ". $name;

    $firstName = "Pallavi";
    $lastName = "Gaikwad";
    echo $firstName." ". $lastName;

    echo $firstName. "\n". $lastName;
    echo $firstName. "<br>". $lastName; // Working on browser
    echo $firstName;
    echo $lastName;

    echo "str" + 2;

?>