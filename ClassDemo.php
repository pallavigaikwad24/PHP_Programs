<?php

$person = array ("Name"=> "Pallavi", "Age" => (int)22, "Qualification" => "BE", "Job"=> "Jr. Software Engineer", "Address" => "Pune");

foreach ($person as $x => $y) {
    echo "$x : $y \n";
}

echo count($person);

echo sizeof ($person);


class ClassDemo {

    public $eventName;

    function __construct ($eventName) {
        $this -> eventName = $eventName;
    }

    function set_event_name ($eventName) {
        $this -> eventName = $eventName;
    }

    function get_event_name () {
        return $this -> eventName;
    }

    function __destruct () {
        echo "Thanks for joing us!!";
    }
}

$event = new ClassDemo("Movie");
$event -> set_event_name ("Concert");
echo $event -> get_event_name();
echo "\n";
echo $event -> eventName;
echo "\n";

$movie = new ClassDemo ("Party");

var_dump ($movie instanceof EventName);

?>