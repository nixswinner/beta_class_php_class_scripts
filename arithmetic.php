<?php

//write a program to add two numbers - 
//arithmetic
/*

+ -sum
- substraction
/ - division
* - multiplications
% - modulus 3%2 - 

*/
//write a program to add numbers
$x =55;
$y = 35;

echo "Value of X - $x and Y - $y";

$sum = $x+$y;

$substraction = $x-$y;
$division = $x/$y;
$multiplications = $x*$y;
$modulus = $x%$y;
$power = $x**$y; //35^55


echo "<br>Sum is ".$sum;
echo "<br>substraction is ".$substraction;
echo "<br>division is ".$division;
echo "<br>multiplications is ".$multiplications;
echo "<br>Modulus of $x and $y = <b style='color:red;'>$modulus</b>";
echo "<br>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Math Ops</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<h2>Math Operations of <?php echo "$x and $y"; ?></h2>

		<div class="col-6">
			<table class="table">
				<tr>
					<th>Operation</th>
					<th>Results</th>
				</tr>

				<tr>
					<td>Sum</td>
					<td>
						<?php echo $sum; ?>
					</td>
				</tr>

				<tr>
					<td>Division</td>
					<td>
						<?php echo $division; ?>
					</td>
				</tr>
				<tr>
					<td>Multiplications</td>
					<td>
						<?php echo $multiplications; ?>
					</td>
				</tr>
				<tr>
					<td>Modulus</td>
					<td>
						<?php echo $modulus; ?>
					</td>
				</tr>

				<tr>
					<td>Exponential</td>
					<td>
						<?php echo $power;?>
					</td>
				</tr>
				
			</table>
			
		</div>
		
	</div>

</body>
</html>