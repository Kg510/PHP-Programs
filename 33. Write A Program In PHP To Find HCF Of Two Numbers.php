<?php
    // Input numbers
    $num1 = 48; // You can change this number
    $num2 = 18; // You can change this number

    // Find the HCF using a loop
    while ($num2 != 0) {
       $remainder = $num1 % $num2;
       $num1= $num2;
       $num2=$remainder; 
    }

    // Output the HCF
    echo "The HCF of the numbers is: $num1";
    echo"<br>";
    echo "This Program Is Written By Kunal Gupta, ERP:- 0221BCA034";

?>