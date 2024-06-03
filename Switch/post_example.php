<?php

$input = readline("Enter your Username: ");

switch ($input) {
    case "pallavi_gaikwad" :
        echo "1. Post \n2. Delete Post \n";
        $action = readline("Enter action: ");
        switch ($action) {
            case 1 : case "Post" : 
                echo "You have uploaded new Post";
                break;
            case 2 : case "Delete Post" :
                echo "You have deleted current Post";
                break;
            default :
                echo "Invalid choice";
        }
    break;

    case "its_abc" :
        echo "1. Post \n2. Delete Post \n";
        $action = readline("Enter action: ");
        switch ($action) {
            case 1 : case "Post" : 
                echo "You have uploaded new Post";
                break;
            case 2 : case "Delete Post" :
                echo "You have deleted current Post";
                break;
            default :
                echo "Invalid choice";
        }
    break;

    default :
        echo "You have entered wrong username, Please enter agin!!";
    
}



?>