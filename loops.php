<?php
/*count from 1 to 10
0  
1  0+1
2 = 1+1
3  2+1
4 3+1
5
6
7
8
9
10

x = 0

echo x
x++; // x+1
echo x =1
x++; = 2

infinit loop

*/

$x =0;
echo "$x<br>";
$x++; //1
echo "$x<br>";

$x++; //2
echo "$x<br>";
$x++; //3
echo "$x<br>";
$x++;//4
echo "$x<br>";

$x++;//5
echo "$x<br>";

//loop
/*

while(condition){//true
	//specify the code repeated
}

*/

echo "Count 0 to 10 Using loops<br>";
$x=0;
while($x<=10){
 	echo "$x <br>";
 	$x++;
}



//Using a while I want you to print 0 to 20
//skip using  2
//0,2,4,6,8,10,12,14,16,18,20

echo "0 to 20 <br>";
$y=0;
while ($y<=20) {
	# code...
	echo "$y<br>";
	$y+=2;// $y = $y+2;
	if ($y>=15) {
		# code...
		break;
	}
}

//Write a program that indicates a value is either even or odd between 0 and 10

//-even number is an any number
//modulus x%2 ==0 - even odd
//0 -- even 
//1 -- odd

$z = 0;
echo "Even and Odd Numbers between 0 and 10<br>";

while ($z<= 10) {
	# code...
	if ($z%2==0) {
		# code...
		//even
		echo "$z -- even<br>";
	}else{
		//odd
		echo "$z -- odd<br>";
	}
	
	$z++;
}


?>