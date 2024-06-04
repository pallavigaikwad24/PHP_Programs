<?php

class Animal {

   private $name;
   public $color;
   protected $number = 20;

   function __construct ($name, $color) {
    $this -> name = $name;
    $this -> color = $color;
   }

   function __destruct() {
    echo "The Animal is {$this->name}. \n";
  }

   function eat () {
    echo $this -> name . " is eating!";
   }

   function get_name () {
    return $this -> name;
   }
}


class Dog extends Animal {
    function bark () {
        echo $this -> get_name () . " is barking \n";
        echo $this -> number . " is number";
    }

}

class Cat extends Animal {

    function meow () {
        echo "Cat is meowing";
    }
}

$Dog = new Dog ("Tommy", "Black");

echo $Dog -> get_name () . " has " . $Dog -> color . " Color \n";
$Dog -> bark ();
echo "\n";

$Dog -> eat ();

echo "\n";
$cat = new Cat ("Nancy", "Golden");

echo "{$cat -> get_name ()} has color {$cat -> color}";
echo "\n";

$cat -> meow ();
echo "\n";

?>