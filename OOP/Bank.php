<?php

class Bank {

    private static $user = array ( "accountNo" => 12345, "amount" => 50000, "accountHolder" => "Pallavi_Gaikwad", "isAuthenticate" => 'false');
    private $input = null;

    public final function getAcess () {
    
         $this -> input = readline ("Enter Account Number: ");
    
        if ( $this -> input == Bank :: $user['accountNo'] ) {
            Bank :: $user['isAuthenticate'] = 'true';
            
        }
    }

    protected function getUserInfo () {
        return Bank :: $user;
    }

}


class User extends Bank {

    private $userInfo = null;

    function __construct () {
        $count = 0;
        do {
            
            $this -> getAcess ();
            $this -> userInfo = $this -> getUserInfo ();

            if ($this -> userInfo['isAuthenticate'] == 'true') {
                echo "Success!! \n";
                break;
            } else {
                echo "Please enter correct Account Number! \n";
                $count++;

                if ( $count === 3 ) {
                    echo "You have reached the limit. Please try again after some time!!";
                    break;
                }
            }

        } while ( true );
    }

    private function getAmount () {
        echo "Your current amount is: " . $this -> userInfo['amount'];
    }

    function getAccountInfo () {
        
        $this -> getAmount ();
    }

    function withdraw ( $withdrawAmount ) {

        $withdrawAmount = readline ("Enter Amount to withdraw: ");

        $this -> userInfo['amount'] -= (int) $withdrawAmount;

        echo "Current amount is: " . $this -> userInfo['amount'];
    }


}

$user = new User();
echo "----- Account Information--------\n";
$user -> getAccountInfo ();
echo "\n";
$user -> withdraw (100);

?>