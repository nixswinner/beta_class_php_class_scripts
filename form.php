<!DOCTYPE html>
<html>
<head>
	<title>Forms PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<h1>Form PHP</h1>
	<div class="container-fluid">
		<div class="col-5">
			<!-- Method
				POST - data passed
				GET - data is shown within url 
				?username= 
			 -->

			<form method="GET" action="">
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Username</label>
			    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
			
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Password</label>
			    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
			  </div>
			  
			  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
			</form>
			
		</div>

		<div class="col">
			<?php
			

			//isset - check s if has been set - clicked has value
			//count 
			if (isset($_GET['submit'])) {
				# code...
				$name = $_GET['username'];
			echo "Welcome $name";

			}

			?>

			<!-- Create a form to capture a name 

				Say hello to that Name

				0-----Name

				Say Hello

				Hello dear name -->
			
		</div>
		
	</div>

</body>
</html>