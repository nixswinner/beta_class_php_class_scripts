<!DOCTYPE html>
<html>
<head>
	<title>Beta | Sign In </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

	<div class="container-fluid">
		<h2 style="color: #106887; font-family: monospace;">Beta Class System</h2>
		<div class="row" style="border:1px #CFE3EA solid; border-radius: 5px; padding: 10px; margin: 5px;">
			<div class="col-5 visible-lg">
			<img class="img-fluid" src="https://st3.depositphotos.com/1084193/18351/v/600/depositphotos_183516252-stock-video-circuit-technology-system-business-presentation.jpg">
		</div>
		<div class="col-5 ">

			<!-- form - sign - username and the password -->

			<form method="POST" action="">
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Username</label>
			    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
			    
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Password</label>
			    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
			  </div>
			
			  <button type="submit" name="submit"  class="btn btn-primary">Sign In</button>
			</form>
			
		</div>

			<?php
				$correctUsername = "beta";
				$correctPassword = "beta@21"; 	

				//$btnSubmit = ;

				if (isset($_POST['submit'])) {
					# code...
					$username = $_POST['username'];
					$password = $_POST['password'];

					//echo "$username and password $password";

					if ($username == $correctUsername && $password == $correctPassword) {
						# code...
						echo "<h2 style='color:green;'>Welcome dear $username!</h2>";
						header("location:welcome.php");//navigate to welcome
					}else{
						echo "<h2 style='color:red;'>Incorrect username or password</h2>";
					}

				}
				
			?>
		</div>
		
	</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>