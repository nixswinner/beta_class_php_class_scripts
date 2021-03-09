<?php
//do while

/*
do while 
execute some code first
then check for the condition

*/

/*
do{

	//body of loop

}while(condition);

*/
echo "<h2><u>Do While </u></h2>";
//show numbers from 1 to 5
echo "Show Count from 1 to 5<br>";

$x = 1;
do{
	echo "$x <br>";
	$x++;
}while($x<=5);



//Using do while loop
/*
Show a count of numbers from 10 down to 0

10
9
8
...
0
*/
echo "Count from 10 down to 0<br>";
$y=10;
do{
	echo "$y <br>";
	$y--;
}while($y>=0);

$trial=3;
$pass=1234;
echo "Password Prompt:<br>";
do{
	$passInput=1234;
	echo "Enter Password:";
	echo "
      <form>
      <input type='password' placeholder='password'/>
      </form>
	";
	if ($pass == $passInput) {
		# code...
		echo "Welcome";
		$trial=0;
	}else{
		echo "Wrong password. Try again<br>";
		$trial--;

	}
	
}while ($trial>0) ;

?>