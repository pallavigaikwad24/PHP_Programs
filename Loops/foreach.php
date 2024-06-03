<?php

$colors = array ("red", "pink", "green", "blue");

foreach ( $colors as $x ) {
    echo "$x \n";
}

// Keys and values

$members = array ("Peter" => 10, "Bob" => 20, "Alis" => 30);

foreach ( $members as $x => $y ) {
    echo "$x have $y points \n";
}

$students = array ( "Peter" => 80, "Alis" => 75, "Robert" => 95, "Steve" => 85, "Brus" => 65, "Thor" => 40 );

foreach ( $students as $name => $marks ) {
    if ( $marks >= 90 && $marks <= 100 ) {
        echo "$name has grade A \n";
    } else if ( $marks >= 70 && $marks <= 89 ) {
        echo "$name has grade B \n";
    } else if ( $marks >= 50 && $marks <= 69 ) {
        echo "$name has grade C \n";
    } else {
        echo "$name has grade D \n";
    }
}

?>