<?php
    function selfMultiply(&$number)
    {
        $number*=$number;
        return $number;
    }
    $mynum=5;
    echo $mynum;
    echo"<br>";
    selfMultiply($mynum);
    echo $mynum;

    echo "<br>";
    echo "This Program Is Written By Kunal Gupta, ERP:- 0221BCA034";

?>