<?php

$colors = array ('red', 'yellow', 'green', 'blue', 'pink');
$colors[] = 'orange';

var_dump ($colors);

$fruits = array ('Apple' => 100, 'Banana' => 200, "Chiku" => 300, "Orange" => 400);

$fruits['cherry'] = 500;

var_dump ($fruits);

array_push ($colors, 'violate', 'peach', 'maroon');

var_dump ($colors);

$fruits += ['kiwi' => 600, 'pineapple' => 700];
var_dump ($fruits);


?>