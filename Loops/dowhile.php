<?php 

$val = 0;

do {
    $val++;
    echo "Value is : $val \n";
} while ($val < 6);

echo "-------------------------------\n";

$val = 10;

do {
    echo "Value is : $val \n";
    $val++;
} while ($val < 6);

echo "------------------------------ \n";

$num = 10;

do {
    $num--;
    if ($num === 5) {
        continue;
    }
    echo "The number is: $num\n";
} while ($num >= 1);

echo "----------------------------\n";

$num2 = 1;

do {
    echo "1. Yes\n2. No\n3. Quite\n";
    $choice = readline("Enter your choice: ");
    if ($choice == 3) {
        break;
    }

} while (true);
?>