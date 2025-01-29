<?php
    $num=5;
    $first=0;
    $second=1;
    echo "Fibonacci Series: ";
    for ($i=0; $i< $num; $i++)
    {
        echo $first. " ";
        $next=$first + $second;
        $first = $second;
        $second=$next;
    }

    echo"<br>";
    echo "This Program Is Written By Kunal Gupta, ERP:- 0221BCA034";

?>