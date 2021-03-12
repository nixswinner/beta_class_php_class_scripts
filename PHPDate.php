<?php

/*
How does php help us to work with date time

*/
///get todays date

/*

when you capture the date 
date()
- date - arguments
- format
-timestamp
d/m/y - 12/03/21

*/

echo "<h2>Today:</h2>";
echo (date('dd/mm/yyyy'));

echo "<br>";

date_default_timezone_set("Africa/Nairobi");

echo "Time now is ".date("h:i:s:a");


//create a program that get the current hour of the day
//determine the greeting
//09
//04-11 - Good morning
//12-15 Good afternoon
//
//hour
//echo date("h");

$currentHour = date("h");
echo "<br>Current Hour $currentHour";
$currentTime = date("h:i a");
if ($currentHour>=04 and $currentHour<=11) {
	echo "<h4>Good Morning. Time now is $currentTime</h4>";
	# code...
}else if ($currentHour>=12 and $currentHour<=16) {
	# code...
	echo "<h4>Good afternoon Time now is $currentTime</h4>";
}else if ($currentHour>=17 and $currentHour<=21) {
	# code...
	echo "<h4>Good evening Time now is $currentTime</h4>";
}else{
	echo "<h4>Good night Time now is $currentTime</h4>";
}


?>
<br>

<form method="POST" action="">
	<label>Age</label>
	<input type="number" name="age" required>
	<br>
	<input type="file" name="file"><br>
	<input type="submit" name="calc" value="Get YOB">
	
</form>

<?php
//capture data from 
if (isset($_POST['calc'])) {
	# code...
	$age = $_POST['age'];//""

	$currentYear = date("Y");//2021
	$yob = $currentYear-$age;
	echo "<h4>You were born in the year ".$yob;
}
?>