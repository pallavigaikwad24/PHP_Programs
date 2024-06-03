<?php 

    $age = 14;

    if ($age >= 18) {
        echo "You are adult";
    } else if ($age < 18) {
        echo "You are teenageer";
    } else if ($age >= 50) {
        echo "You are oldage";
    } else {
        echo "You are not adult";
    }

    $marks = 80;

    if ($marks >= 90 && $marks <= 100){
        echo "A";
    } else if ($marks >= 70 && $marks <= 89) {
        echo "B";
    } else if ($marks >= 60 && $marks <= 69) {
        echo "C";
    } else {
        echo "D";
    }

    echo "\n";

    $isAuthenticate = false;
    echo $isAuthenticate ? "Welcome you have access to this page" : "Access denied!!";

    
?>
