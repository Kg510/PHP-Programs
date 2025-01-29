<?php

    $x = 25;
    $y = 35;
    $z = "25";
    
    var_dump($x == $z);  // Outputs: boolean true
    echo "<br>";
    var_dump($x === $z); // Outputs: boolean false
    echo "<br>";
    var_dump($x != $y);  // Outputs: boolean true
    echo "<br>";
    var_dump($x !== $z); // Outputs: boolean true
    echo "<br>";
    var_dump($x < $y);   // Outputs: boolean true
    echo "<br>";
    var_dump($x > $y);   // Outputs: boolean false
    echo "<br>";
    var_dump($x <= $y);  // Outputs: boolean true
    echo "<br>";
    var_dump($x >= $y);  // Outputs: boolean false
    echo "<br>";
    echo "This Program Is Written By Kunal Gupta, ERP:- 0221BCA034";

?>