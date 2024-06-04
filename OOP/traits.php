<?php

trait HasMenu {

    public $items;

    public function getMenu () : array {
        return $this -> items;
    }
}

trait HasAssignSeats {

    public $seatCount = 100;
    private $count  = 0;

    function getTotalSeatCount (){
        return $this -> seatCount;
    }

    function assignSeat () {
        $this -> seatCount -= 1;
    
        echo "Seat Assign Successfully : Seat No. " . $this -> count += 1;
    }

    function getCurrSeatCount () {
        return $this -> seatCount;
    }
}


class Concert {

    use HasMenu, HasAssignSeats;

    function __construct () {

        $this -> items = [
            'Nachos',
            'Juice',
            'French Fries',
            'Burger'
        ];
    }
}


$concert = new Concert ();

// var_dump ($play -> getMenu ());

foreach ($concert -> getMenu () as $item) {
    echo "$item \n";
}

echo "\n";

echo "Total Seat Count is: " . $concert -> getTotalSeatCount ();

echo "\n";

$concert -> assignSeat ();
echo "\n";
$concert -> assignSeat ();
echo "\n";
$concert -> assignSeat ();
echo "\n";
$concert -> assignSeat ();
echo "\n";

echo "Current Seat Count is :" . $concert -> getCurrSeatCount ();


?>