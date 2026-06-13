<?php
    // 1.2 Write a PHP program to find out maximum and minimum number

    $a=10;
    $b=20;
    $c=30;

    // Finding Maximum
    if ($a > $b && $a > $b) {
        echo "The maximum number is: $a"; 
    }
    elseif ($b > $a && $b > $c) {
        echo "The Maximum number is: $b";
    }
    else{
        echo "The Maximum number is: $c";
    }

    echo "</br>";

    // Finding Minimum 
    if ($a < $b && $a < $c) {
        echo "The maximum number is: $a"; 
    }
    elseif ($b < $a && $b < $c) {
        echo "The Maximum number is: $b";
    }
    else{
        echo "The Maximum number is: $c";
    }
?>
