<?php

/*
- balance amount
- pin
- money to be send
*/

$balance = 5000;

$pin = 6780;

$amountToSend = 2000;
$pinEntered= 6780;

//send to money
if ($amountToSend <= $balance) { //if 2000 less or equal 5000? true
	# code...

	echo "<h2>Send Money Now</h2>";
}else{
	//false
	echo "<br><h2>Insufficient Balance to send .You balance is $balance</h2>";
}

//check pin
//- pin correct - Sending money .....

//incorrenct --- invalid pin .try again
if($pinEntered == $pin){
	//code ...
	echo "<h2 style='color:green;'>Sending money ....</h2>";
}else{
	//
	echo "<h2 style='color:red'>Invalid Pin!</h2>";
}



?>