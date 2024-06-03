<?php
    $a = 445;
    $b = 10;

    echo "------------------ Arithmetic Operator -------------------";
    echo "\n";
    echo "The Addition of a + b is ". ($a + $b);
    echo "\n";
    echo "Addition with String: ", ("10" + "30");
    echo "\n";
    echo "Addition with String and number: ", ($a + "30");
    echo "\n";
    // echo "Addition with String and alphabet: ", ("pallavi" + "30"); // error
    
    echo "\n";
    echo "The subtraction of a - b is ". ($a - $b);
    echo "\n";

    echo "The Multiplication of a * b is ". ($a * $b);
    echo "\n";

    echo "The Division of a / b is ". ($a / $b);
    echo "\n";

    echo "The modulous of a % b is ". ($a % $b);
    echo "\n";

    echo "The Exponential of a ** b is ". ($a ** $b);
    echo "\n";

    echo $a + $b;
    echo "\n";

    echo "------------- Assignment Operator -------------------";
    echo "\n";
    $val = 3;
    echo "Equal to operator: ". $val;
    echo "\n";

    echo "Addition : ". $val += 10;
    echo "\n";
    echo "Subtraction : ". $val -= 10;
    echo "\n";
    echo "Multiplication : ". $val *= 10;
    echo "\n";
    echo "Division : ". $val /= 10;
    echo "\n";
    echo "Modulus : ". $val %= 10;
    echo "\n";

    echo "------------- Comparision Operator -------------------";
    echo "\n";

    $a = 10;
    $b = "10";
    $c = 5;

    echo var_dump($a == $b);
    echo "\n";
    echo var_dump($a === $b);
    echo "\n";
    echo var_dump($a != $b);
    echo "\n";
    echo var_dump($a <> $c); // false because values are equal
    echo "\n";
    echo var_dump($a !== $b);
    echo "\n";
    echo var_dump($a > $b);
    echo "\n";
    echo var_dump($a < $b);
    echo "\n";
    echo var_dump($a <= $b);
    echo "\n";
    echo var_dump($a >= $b);
    echo "\n";
    echo var_dump($a <=> $b); // spaceship operator equal = 0, a<b = -1, a>b = 1
    echo "\n";


    echo "---------------- Conditional Assignment ------------";
    echo "\n";
    echo 12 !== 12 ? "False" : "true";
    echo "\n";

    echo "First value" ?? "Second Value";
    echo "\n";
    echo "First value" ?? NULL;
    echo "\n";
    echo NULL ?? "Second Value";
    echo "\n";
    echo var_dump(NULL ?? NULL);
    echo "\n";

    print "This is print statement \n";

    echo "-----------------Logical Operator ------------------\n";

    // $username = readline("Enter username: ");
    // $password = readline("Enter password: ");

    $username = "Pallavi";
    $password = "Pallavi@24";
    $email = "pallavi@gmail.com";

    if ( ($username === "Pallavi" || $email === "pallavi@gmail.com") && $password === "Pallavi@24" ) {
        echo "You are successfully logged in \n";
    } else {
        echo "Username or Password is wrong \n";
    }

    // XOR: True if either $x or $y is true, but not both

    $firstPerson = true;
    $secondPerson = false;

    if ( $firstPerson xor $secondPerson ) {
        echo "You can continue to transaction \n";
    } else {
        echo "Wait! one person can do transaction at a time..\n";
    }

    // (NOT) ! is used for false result (True if value is not true)

    $angle = 60;

    if ( !($angle === 90) ) {
        echo "This is not right angle triangle \n";
    } else {
        echo "This is a right angle triangle \n";
    }

    
?>