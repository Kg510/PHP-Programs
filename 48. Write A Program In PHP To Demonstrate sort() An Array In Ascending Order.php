<!DOCTYPE html>
<html>
<body>

<?php

    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars);
    
    $clength = count($cars);
    for($x = 0; $x < $clength; $x++){
        echo $cars[$x] . 
        "<br>";
    }
   ?>

"This Program is written by Kunal Gupta, ERP:- 0221BCA034"

</body>
</html>