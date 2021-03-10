
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<?php

/*

Associative 
- key and value
key - indentify 
key => value

*/

//create an array to store persons and their ages

$personAges = array('Peter'=>20,'John'=>22,'Jane'=>23,"Joy"=>21);

echo "Peter's Age ".$personAges['Peter'];
echo "<br>";
echo "Jane's Age ".$personAges['Jane'];

//dipslay all the items within personAges
//loop
//for each
echo "<hr>";

foreach ($personAges as $key => $value) {
	# code...
	$yob = 2021-$value;
	echo "$key  is $value years old was born in $yob<br>";
}

/*
foreach 
$variable - array - assoc
$key - 
$values
*/

$employeeSalaries = array("John"=>50000,"Jane"=>60000,"Peter"=>55000,"Bob"=>760000,"Joy"=>140000,"Grace"=>101000,"Joshua"=>89000);



?>
<div class="col-5">
	<h2>Employees Salary</h2>
	<table class="table">
		<tr>
			<th>Name</th>
			<th>Monthly Salary</th>
		</tr>
		<?php
		foreach ($employeeSalaries as $key => $value) {
			# code...
			echo "<tr>";
			echo "<td>$key</td>";
			echo "<td>$value</td>";
			echo "</tr>";
		}

		?>

		
	</table>
	
</div>

</body>
</html>