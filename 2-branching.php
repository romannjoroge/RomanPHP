<?php
    /* 
        Branching in PHP is done using if, elseif, else block
        They take a boolean expression as an arguement

        User Input is done using the readline() function preceeded by a type conversion *not sure
        why it's done *
    */
    // Looking at comparison between a and b

    // Ask user to input 2 numbers
    $first = (int)readline("Enter value for first number: ");
    $second = (int)readline("Enter value for second number: ");

    $test = readline("Enter a test number: ");
    

    // Say relation of those two numbers i.e whether larger, smaller etc
    if ($first < $second){
        echo "The first number is smaller than the second number\n";
    }
    elseif($first == $second){
        echo "Both numbers are equal\n";
    }
    else{
        echo "The second number is less than the first\n";
    }
?>