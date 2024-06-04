<?php

interface ParentOne {
    public function setName ($arg);
    public function getName ();
}
interface ParentTwo {
    public function abc ();
    public function xyz ();
}

class Dog implements ParentOne, ParentTwo {
    Private $name;
    public function setName ($name){
        $this -> name = $name;
    }
 
    public function getName () {
        return $this -> name;
    }

    function abc () {
        echo "abc";
    }
    function xyz () {
        echo "xyz";
    }
}

$dog = new Dog();

$dog -> setName("Mongmong");
echo "\n";
echo  "{$dog -> getName ()}";
echo "\n";
$dog -> abc();
echo "\n";
$dog -> xyz();

?>