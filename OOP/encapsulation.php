<?php

class Car {
    private $model;
    private $color;
    private $fuelLevel;

    public function __constract ($model, $color) {
        $this -> model = $model;
        $this -> color = $color;
        $this -> fuelLevel = 100;
    }

    public function get_model () {
        return $this -> model;
    }

    public function get_color () {
        return $this -> color;
    }

    public function get_fuelLevel () {
        return $this -> fuelLevel;
    }
}

$suzuki = new Car ("Suzuki", "Black");

echo $suzuki -> get_color () . "of" . $suzuki -> get_model () . " the fuel level is " . $suzuki -> get_fuelLevel();

?>