<hl>
<body>

<?php
    $marks = array(
     "roshan" => array (
       "physics"=>35,
       "maths"=>30,
       "chemistry"=>39
),

 "twinkle" => array (
  "physics"=>30,
  "maths"=>32,
  "chemistry"=>29
),

"zara" => array (
  "physics"=>31,
  "maths"=>22,
  "chemistry"=>39
  )
);

/* Accessing multi-dimensional array values */
echo "Marks for Roshan in Physics : " ;
echo $marks['roshan']['physics'] . "<br />";

echo "Marks for Twinkle in Maths : ";
echo $marks['twinkle']['maths'] . "<br/>";

echo "Marks for Zara in Chemistry : " ;
echo $marks['zara']['chemistry'] . "<br />";
?>

"This Program is written by Kunal Gupta, ERP:- 0221BCA034"
</body>
</hl>