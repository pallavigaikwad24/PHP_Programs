<?php

class Fruit {
    public $name;
    public $color;

    function set_name ($name) {
        $this -> name = $name;
    }

    function get_name () {
        echo "{$this -> name} is {$this -> color} color fruit \n";
    }
}

$mongo = new Fruit ();
$mongo -> set_name ("Mongo");
$mongo -> color = "Yellow";
$mongo -> get_name ();

$cherry = new Fruit ();

$cherry -> set_name ("Cherry");
$cherry -> color = "Red";

$cherry -> get_name ();

?>