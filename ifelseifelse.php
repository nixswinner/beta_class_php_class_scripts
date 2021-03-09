<?php


/*

condition 
more than 2 condition - 

if else if ..else

Average Marks scored
- marks scored grade
marks = 78
marks = 24
marks = 56

-Grades 
A - 70 and above
B - 60-69
C - 50-59
D- 40 -49
F - below 40
*/
echo "<h2>Marks Grading</h2>";
$markScored = 8;
echo "<h3>Average Mark Scored $markScored</h3>";

if ($markScored>=70) {
	# code...
	echo "A";
}else if($markScored>=60){
	echo "B";
}else if($markScored>=50){
	echo "C";
}else if($markScored>=40){
	echo "D";
}else{
	echo "Fail";
}

/*
Write a PHP Program .
Give a country tel code. display the country name

254 - Kenya
255 - Tanzania
256 - Uganda
250 - Rwanda
257 - Burundi

*/
echo "<hr>";
echo "<br>Country Tel Code";
echo "<br>";

$countryTelCode = 7250;

if ($countryTelCode==254) {
	echo "Kenya";
	# code...
}else if($countryTelCode  ==255){
	echo "Tanzania";
}else if($countryTelCode ==256){
	echo "Uganda";
}else if ($countryTelCode==257){
	echo "Burundi";
}else if ($countryTelCode==250){
	echo "Rwanda";
}else{
	echo "I think! $countryTelCode is not for any East African Country.";
}

?>