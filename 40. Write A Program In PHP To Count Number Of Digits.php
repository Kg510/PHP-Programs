<?php
$num = 1509;
function countdigits($num){
    $count = 0;
    while ($num >0){
        $num = (int)($num /10);
        $count ++;
    }
    return $count;
}
echo countdigits($num);
echo"<br>";
echo "This Program Is Written By Kunal Gupta, ERP:- 0221BCA034";
?>