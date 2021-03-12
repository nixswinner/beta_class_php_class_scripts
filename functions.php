<?php

/*
Function - does job
n=bundled set of statements
- specific

syntax

function keyword - followed by functionName
-()
{
	//set of statements
}

- function - descriptive of its task 
- verb
*/

//NOTE - creating a function 
//begin to work 

//create to say hello
echo "<h1>Function</h1>";

function sayHello(){
	echo "Good morning Beta";
}

function addNumbers(){
	echo (20+30);//addd
}

//call the function functioName();

sayHello();
echo "<br>";
addNumbers();
//create a function to say your name

function sayMyName(){
	echo "<br>";
	echo "John Doe";
}

sayMyName();
/*
Arguments - in the form variables()
*/

function addTwoNumbers($num1,$num2){
	echo "<br>";
	echo $num2+$num1;

}

function sayMyNamePlease($name){
	echo "<br>";
	echo "Hey,$name";

}

addTwoNumbers(10,30);
addTwoNumbers(45,89);

addTwoNumbers(234,789);

sayMyNamePlease("Jane");
sayMyNamePlease("Alice");

///create a function to calculate average marks
$marks = array(45,78,98,90,76,45,34,67,89);

//create a function that will recive the above array of marks an dcaculate their average.

function findAverageMark($marks){
	//find average
	//sum - 
	//divide by the number 
	//
	$countOfMarks  = count($marks);
	$sum =0;
	for($i=0;$i<$countOfMarks;$i++){
		$sum+=$marks[$i]; //$sum = $sum+$marks[$i];
	}

	//caculate the average
	$average = $sum/$countOfMarks;

	//echo "The average mark is $average";
	return $average;

}

echo "<br>";
$avg = findAverageMark($marks);
echo "The averageMark is <b>".round($avg,3)."</b>";
echo "<br>";
$otheravg = findAverageMark(array(60,89,78,65));
echo "The other average mark scored is <b>$otheravg</b>";


//create a function that find average given an arrays
//function - get arguments - manipulate it give results - return a value
//89,76,56,44,67
echo "<h4>Finding Average Mark</h4>";

function findAvgMark($marks){
	$noOfMarks = count($marks);
	$sum = 0;
	for($i=0;$i<$noOfMarks;$i++){
		$sum+=$marks[$i];//$sum = $sum+$mark[i]
	}
	//calculate - $sum / 4count
	$avg = $sum/$noOfMarks;
	return $avg;
}

$algorithMarks = array(67,59,54,56,10,75);
$avgMark = findAvgMark($algorithMarks);

$grade = getGrade($avgMark);

echo "Avg Mark: ".round($avgMark,2);
echo "<br>You scored grade: ".$grade;



function getGrade($averageMark){
	$grade = "";
	if ($averageMark>=70) {
		$grade = "A";
		# code...
	}elseif ($averageMark>=60 and $averageMark<70) {//60-69
		# code...
		$grade = "B";
	}elseif ($averageMark>=50 and $averageMark<60) {//50-59
		# code...
		$grade = "C";
	}elseif ($averageMark>=40 and $averageMark<50) {//40-49
		# code...
		$grade = "D";
	}else{
		$grade="F";
	}
	return $grade;
}

?>