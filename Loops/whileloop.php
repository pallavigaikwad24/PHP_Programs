<?php

$input = readline("Enter a number: ");
$counter = 1;
while ($counter <= 10) {
    echo "$input x $counter = ". $input * $counter . "\n";
    $counter++;
}

// Using pre increment

$num = readline("Enter number: ");
$i = 1;

echo "Odd number is: \n";
while ($i <= $num) {
    if ( $i % 2 !== 0 ) {
        echo "$i \n";
    }
    $i++;
}

echo "----------- Increment ---------- \n";

$x = 0;
$y = 0;
$val2 = ++$x;  // First update then use
$val3 = $y++;  // First use then update
echo "$val2 \n";
echo "$val3 \n";


?>