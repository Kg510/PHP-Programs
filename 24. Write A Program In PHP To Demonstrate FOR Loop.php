<?php

    /* example 1 */
    echo "First Way \t";
    for ($i = 1; $i <= 10; $i++)
    {
        echo $i;
    	echo "\t";
    }
    
    /* example 2 */
    echo "<br> Another Way\t";
    for ($i = 1; ; $i++)
    {
        if ($i > 10)
        {
            break;
        }
        echo $i;
    	echo "\t";
    }
    echo"<br>";
    echo "This Program Is Written By Kunal Gupta, ERP:- 0221BCA034";

?>