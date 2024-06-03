<?php declare (strict_types = 1);

function getValue (string $name) {
    echo "$name \n";
}

getValue ("Pallavi");

echo "---------- Variable Length -----------\n";

function getArray (...$arr) {
    // var_dump ($arr);
    foreach ($arr as $x) {
        echo "$x \n";
    }
}

getArray (1, "abcd", 23.67, true);

echo "---------- Return Type for Single in Function -----------\n";

function singleReturnType () {
    $name = readline ("Enter your name: ");
    return $name;
}

echo singleReturnType() . "\n";

echo "--- Return Type for multiple in Function ----\n";

function multipleReturnType () {
    $info = array ("name" => "pallavi", "age" => 22, "grade" => "A");

    return $info;
}

$student = multipleReturnType();

foreach ($student as $key => $val) {
    echo "$key : $val \n";
}

?>