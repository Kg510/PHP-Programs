<?php
echo "<table border='1' width='400px' height='400px'>";
for($row=1;$row<=8;$row++){
echo"<tr>";
for($col=1;$col<=8;$col++){
$total=$row+$col;
if($total%2==0){
echo"<td bgcolor='#000000'></td>";
}else{
echo"<td bgcolor='#FFFFFF'></td>";
}
}
echo"</tr>";
}
echo"</table>";

echo "<br>";
echo "This Program is written by Kunal Gupta, ERP:- 0221BCA034"

?>