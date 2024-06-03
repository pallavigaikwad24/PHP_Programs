<?php


for($i = 0; $i <= 20; $i++){
    if ($i % 2 === 0){
        echo "Even Number: ". $i ."\n";
    }
}

echo "------------------------------------\n";
$colors = array ("red", "green", "blue", "pink", "yellow", "purple");

foreach ($colors as $color) {
    echo "$color \n";
}

echo "------------------------------------\n";

$person = array ( "peter" => 90, "Alis" => 50, "Bob" => 70, "Robert" => 80 );

foreach ($person as $name => $marks) {
    echo "$name \n";
}

?>