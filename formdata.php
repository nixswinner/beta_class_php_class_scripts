<?php

echo "<h2>Welcome to form data</h2>";
/*
depending on the method - POST.GET

capture form data
-POST
form - input - name ="username"
- creates an associative array

//post name - value
$_POST['key-name ']

//Get
$_GET[]

*/

//capture username

$name = $_GET['username'];

echo "Welcome dear $name";

?>