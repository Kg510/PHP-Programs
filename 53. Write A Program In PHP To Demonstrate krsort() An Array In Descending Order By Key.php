<!DOCTYPE html>
<html lang="en">
<head>
<title>Sorting PHP Associative Array in Desscending Order by key</title>
</head>
<body>
<?php

    // Define array
    $age = array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35);
     
    // Sorting array by value and print
    krsort($age);
    print_r($age);

?>

<br>
"This Program is written by Kunal Gupta, ERP:- 0221BCA034"

</body>
</html>