<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

<h1>Say Hello to </h1>
	<form style="margin: 5px;" method="POST" action="">
		 <div class="mb-3 col-4">
			    <label for="exampleInputEmail1" class="form-label">Name</label>
			    <input type="text" class="form-control" name="personName" id="exampleInputEmail1" aria-describedby="emailHelp">
			
			  </div>
			  <button name="submit" type="submit" class="btn btn-primary">Say Hello</button>
	</form>

	<?php

	///capture the name
	//say greeting to that name
	//
	$buttonClicked = $_POST['submit'];
	if (isset($buttonClicked)) {
		# code...
		$name = $_POST['personName'];
		echo "<h2>Good morning $name</h2>";
	}
	

	?>

</body>
</html>