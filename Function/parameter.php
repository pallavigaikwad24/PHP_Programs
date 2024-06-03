<?php

// require('task.php');

// echo "This is function XYZ";

// Default function
function getMessage() {
    echo "This is message retun by getMessage function";
}

// getmessage();


// Function with parameter
function getStudentInfo ($univercityNumber) {
    if ( $univercityNumber === 123456 ) {
        return true;
    } else {
        return false;
    }
}

$info = getStudentInfo (123456);

if ( $info ) {
    $resultInfo = array ("Full Name" => "Pallavi", "Age" => 22, "Department" => "Computer", "City" => "Pune");
    foreach ($resultInfo as $key => $value) {
        echo "$key : $value \n";
    }
} else {
    echo "Please enter valid University Number";
}

?>