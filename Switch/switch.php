<?php

$valOne = 10;
$valTwo = 20;
$operation = "Div";

switch ($operation) {
    case "Add" :
        echo $valOne + $valTwo;
        break;
    case "Sub" :
        echo $valOne - $valTwo;
        break;
    case "Mul" :
        echo $valOne * $valTwo;
        break;
    case "Div" :
        echo $valOne / $valTwo;
        break;
    case "Mod" :
        echo $valOne % $valTwo;
        break;
    default :
        echo "Invalid Operation";
        break;
}


$color = "red";

switch ($color) {
    case "red" :
        echo "my fav Color is: $color \n";
        break;
    case "yellow" :
        echo "my fav Color is: $color \n";
        break;
    case "blue" :
        echo "my fav Color is: $color \n";
        break;
    case "pink" :
        echo "my fav Color is: $color \n";
        break;
    default :
        echo "Invalid Color";
        break;
}

// ---------- Day of WEEK -------------
echo "\n";

$day = 2;

switch ($day) {
    case "Monday" : case 1 :
        echo "Today is Monday";
        break;
    case "Tuesday" : case 2 :
        echo "Today is Tuesday";
        break;
    case "Wednesday" : case 3 :
        echo "Today is Wednesday";
        break;
    case "Thursday" : case 4 :
        echo "Today is Thursday";
        break;
    case "Friday" : case 5 :
        echo "Today is Friday";
        break;
    case "Saturday" : case 6:
        echo "Today is Saturday";
        break;
    case "Sunday" : case 7 :
        echo "Today is Sunday";
        break;
    default :
        echo "Invalid Day, Please enter correct Day";
}


//--------------- Multiple case for same result ------- 

$val = 2;

switch ($val) {
    case 1 : case 2 : case 3 :
        echo "This is common statement";
        break;
    case 4 :
        echo  "This is second statement";
        break;
    default :
        echo "Default statement";
}

?>