<?php
    // Input number
    $number = 153; // You can change this number
    $num = $number; $sum = 0;

    $numofdigits = strlen((string)$number);

    while ($num > 0) {
        $digit = $num % 10;
        $sum += pow($digit, $numofdigits);
        $num = (int)($num / 10);
    }

    if ($sum == $number) {
        echo "$number is an Armstrong number.";
    } else {
        echo "$number is not an Armstrong number.";
    }
    echo"<br>";
    echo "This Program Is Written By Kunal Gupta, ERP:- 0221BCA034";

?>