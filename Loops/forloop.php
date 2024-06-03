<?php

// Using continue keyword
for ($val = 0; $val <= 10; $val++) {
    if($val === 5) 
        continue;
    echo "$val \n";
}

echo "-------------------------- \n";

for ($val = 10; $val <= 50; $val += 5) {
    echo "$val \n";
    if ($val === 35) {
        break;
    }
}

echo "-------------------------- \n";

for($val = 97 ; $val <= 122; $val++) {
    echo chr($val) . "\n";
}

echo "----------------------------\n";

for($even = 1, $odd = 1; $even, $odd <= 20; $even++, $odd++){
    if ($even % 2 == 0) {
        echo "even value: $even \n";
    }

    if ( $odd % 2 != 0 ) {
        echo "Odd value: $odd \n";
    }
}

echo "-------------------------------\n";

for ($i = 1; $i <= 4; $i++){
    for ($k = 1; $k <= 5; $k++){
        echo "*";
    }
    echo "\n";
}

echo "-------------------------------\n";
$n = 4;
for ($i = 1; $i <= $n; $i++){
    for ($j = 1; $j <= $n - $i; $j++) {
        echo " ";
    }

    for ($k = 1; $k <= $n; $k++){
        echo "*";
    }
    echo "\n";
}
?>