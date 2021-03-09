<?php



/*

Array - special - variable
- can store multiple values.

*/

$planets = array("Mercury","Venus","Earth","Mars","Jupyter","Saturn");

//access this values

$x =20;
//display - 
/*
to access values stored -
- indexed -
0, last
access n
arrayName[position]

*/
echo $planets[0];
echo "<br>";
echo $planets[1];
echo "<br>";
echo $planets[2];

echo "<br><u>List of Planets</u> <br>";
//white 0 - 40
$x =0;
while ($x < 6) {
	# code...
	//echo "<br>$x <br>";
	echo $planets[$x];
	echo "<br>";
	$x++;
}

//using arrays store a list of 6-10 counties
//diplay in a html list and table
/*
1
*/

?>