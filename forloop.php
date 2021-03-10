<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>



<?php


/*
For loop - executes code specified

synatx of for loop

for(init;condition;increment){
	
}


*/

//count from 0 to 5
/*$x=0;
while ($x<=5) {
	# code...
	echo "$x <br>";
	$x++;
}*/

for($x=0;$x<=5;$x++){
	//echo "$x <br>";
}

//using arrays store a list of 6-10 counties
//diplay in a html list and table
/*
1
*/


$counties = array("Nairobi","Kisumu","Mombasa","Kiambu","Nyeri","Nakuru","Isiolo","Kisii","Narok","Kajiado");
echo "<ul >";

//count the number inside - count
echo "No in my array ".count($counties);
$no = count($counties);

for ($i=0; $i < $no ; $i++) { 

	//echo $counties[$i];
	//echo "<br>";
	echo ' <li class="list-group-item">'.$counties[$i].'</li>';
	
}

echo "</ul>";

echo "<h3>Table</h3>";


?>

<div class="col-5">
	<table class="table">
	<tr>
		<th>No.</th>
		<th>Name</th>
	</tr>
	<?php

	for ($i=0; $i < $no ; $i++) { 
		# code...
		echo "<tr>";
		echo "<td>".($i+1)."</td>";
		echo "<td> $counties[$i]</td>";
		echo "</tr>";
	}

	?>
	
</table>
</div>



</body>
</html>