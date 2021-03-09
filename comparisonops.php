<?php

/*

Comparison Operators

- compare items 
-Equal to  ==
-greater than >
-less than <

greater than or equal to >=
less than or equal to <=

$x = 10;
$y =20;
x and y {10,20}
$x==$y {is 10 equal to 20? }

$x>$y  {is 10 greater than 20 ?}

answer - yes or no
true and false

true and false -> boolean 

*/

$x = 20;
$y = 10;

//0, 1 - 0 off 1, on
//1 - true 
//null 0, false

$result = $x>$y;
$equalToResult = $x<$y;
echo "The answer is $result";
echo "<br>The answer for equal to  is $equalToResult";
echo "<br> ".$result==true;

?>