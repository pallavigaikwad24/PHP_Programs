<?php

/* --------- While Loop ---------- */

echo "---------- While Loop ----------\n";

$number = 0;
while ($number < 10) {
    $number++;
    if($number === 5) {
        continue;
    }
    echo "$number \n";
}

// Infinite LOOP
// while ($number < 10) {
//     echo "$number \n";
//     if($number === 5) {
//         continue;
//     }
//     $number++;
// }

/* ------------ DO while Loop ------------- */

echo "---------- Do While:  reverse number ----------\n";

$val = 10;

do {
 echo "$val \n";
 $val--;
} while ($val >= 1);

echo "---------- Do While with Break ----------\n";

$num = 10;

do {
 echo "$num \n";
 if($num === 5){
     break;
    }
 $num--;
} while ($num >= 1);

?>