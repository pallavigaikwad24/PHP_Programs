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

class Triangle extends Shape {

    private $base;
    private $height;
 
    function __construct ($base, $height) {
        $this -> base = $base;
        $this -> height = $height;
    }

    function calculateArea() {
        return 1/2 * $this -> base * $this -> height;
    }
}

$circle = new Circle (5);
$triangle = new Triangle (20, 15);

echo "The area of the Circle is: {$circle -> calculateArea()} \n";
echo "The area of the Triangle is: {$triangle -> calculateArea()} \n";

?>