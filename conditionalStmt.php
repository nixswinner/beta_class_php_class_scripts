<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Conditional Statements</title>
</head>
<body>

</body>
</html>

<?php


$age = 16;
$eldersAgeMinimum=70;

//print - you qualify - welcome to the elders club

if($age>=$eldersAgeMinimum){ //80>=70 -true
	//body of code - condition

	echo "<h1>Welcome to elders club</h1>";
}

echo "<br>You are $age years old";
echo "<br>";


//take care 2 condition - true false

//condition

if($age>=18){

//true
	echo "Hey! welcome.You can get a driving licence";

}else{

//false
	echo "Hey! Welcome to kids club";

}


//
$speed = 40;

$speedLimit =50;
if ($speed>$speedLimit) {
	# code...
	echo "<h1 style='color:red'>You are overspeeding!Speed Kills </h1>";
}else{
	echo "<h1 style='color:green'>Good Speed! &#128512;</h1>";
}

?>