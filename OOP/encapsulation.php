<?php

class Car {
    private $model;
    private $color;
    private $fuelLevel;

    function __construct ($model, $color) {
        $this -> model = $model;
        $this -> color = $color;
        $this -> fuelLevel = 100;
    }

    function get_model () {
        return $this -> model;
    }

    function get_color () {
        return $this -> color;
    }

    function get_fuelLevel () {
        return $this -> fuelLevel;
    }

    function drive () {
        $this -> fuelLevel -= 10;

        if ( $this -> fuelLevel < 0 ) {
            $this -> fuelLevel = 0;
        }
    }
}

$suzuki = new Car ("Suzuki", "Black");

echo "Model :" . $suzuki -> get_color () ."\n";
echo "Color :" . $suzuki -> get_model () ."\n";

echo "Initial Fuel Level :" . $suzuki -> get_fuelLevel ();

$suzuki -> drive ();

echo "\n";

echo "After Drive Fuel Level :" . $suzuki -> get_fuelLevel ();

?>