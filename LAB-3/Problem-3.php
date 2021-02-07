<html>
  <head>
    <title>problem1</title>
  </head>
  <body>

<?php

$a=3;
$b=4;
$area=$a*$b;
$perimeter=2*($a+$b);

echo "Area with Length $a and Width $b is = " ,$area;
echo "<br>";

echo "Perimeter with Length $a and Width $b is = " ,$perimeter;
if ($area==$perimeter)
{
  echo "The Shape Is Square";
}

?>
</body>
</html>
