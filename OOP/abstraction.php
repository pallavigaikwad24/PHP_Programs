<?php

abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    private $radius;

    public function __construct ($radius) {
        $this -> radius = $radius;
    }

    public function calculateArea (){
        return pi() * pow($this -> radius, 2);
    }
}

$circle = new Circle (5);

$areaOfCircle = $circle -> calculateArea();

echo "The area of the Circle is: $areaOfCircle";

?>