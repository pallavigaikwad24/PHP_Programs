<?php

$account_number = readline("Enter your bank Account Number: ");

switch ($account_number) {
    case 1234 :
        $curr_amount = 2000;
        echo "1. Show balance\n2. Withdraw Amount\n3. Deposite Amount\n";
        $choice = readline("Enter choice: ");

        switch ($choice) {
            case 1 : case "Show balance" :
                echo "$curr_amount \n";
                break;
            case 2 : case "Withdraw Amount" :
                $w_amount = readline("Enter Amount to withdraw : ");
                $curr_amount -= $w_amount;
                echo "Your remainig balance is: $curr_amount";
                break;
            case 3 : case "Deposite Amount" :
                $d_amount = readline("Enter Amount to deposite: ");
                $curr_amount += $d_amount;
                echo "Your current amount is: $curr_amount";
                break;
            default :
                echo "Please enter correct option!!";
                break;
        }
    break;

    case 9876 :
        $curr_amount = 5000;
        echo "1. Show balance\n2. Withdraw Amount\n3. Deposite Amount\n";
        $choice = readline("Enter choice: ");
    
        switch ($choice) {
            case 1 : case "Show balance" :
                echo "$curr_amount \n";
                break;
            case 2 : case "Withdraw Amount" :
                $w_amount = readline("Enter Amount to withdraw : ");
                $curr_amount -= $w_amount;
                echo "Your remainig balance is: $curr_amount";
                break;
            case 3 : case "Deposite Amount" :
                $d_amount = readline("\nEnter Amount to deposite: ");
                $curr_amount += $d_amount;
                echo "Your current amount is: $curr_amount";
                break;
            default :
                echo "Please enter correct option!!";
                break;
        }
    break;

    case 4567 :
        $curr_amount = 10000;
        echo "1. Show balance\n2. Withdraw Amount\n3. Deposite Amount\n";
        $choice = readline("Enter choice: ");
    
        switch ($choice) {
            case 1 : case "Show balance" :
                echo "$curr_amount \n";
                break;
            case 2 : case "Withdraw Amount" :
                $w_amount = readline("Enter Amount to withdraw : ");
                $curr_amount -= $w_amount;
                echo "Your remainig balance is: $curr_amount";
                break;
            case 3 : case "Deposite Amount" :
                $d_amount = readline("\nEnter Amount to deposite: ");
                $curr_amount += $d_amount;
                echo "Your current amount is: $curr_amount";
                break;
            default :
                echo "Please enter correct option!!";
                break;
        }
    break;
        
    default :
        echo "Please enter correct Account Number";
}

?>