<!DOCTYPE html>
<html>
<head>
	<title>Save File</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<Center><h1>Saving File</h1></Center>
		<div class="row">

			<div class="col-5">
				<img height="200px"src="https://icons-for-free.com/iconfiles/png/512/cloud+upload+file+storage+upload+icon-1320190558968694328.png" >
		</div>
		<div class="col-6">
			<form method="POST" action="" enctype="multipart/form-data">
		  <div class="mb-3">
		    <label for="exampleInputEmail1" class="form-label">Name</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" name="name" required aria-describedby="emailHelp">
		   
		  </div>
		   <div class="mb-3">
		    <label for="exampleInputEmail1" class="form-label">File</label>
		    <input type="file" class="form-control" name="file" id="exampleInputEmail1" aria-describedby="emailHelp">
		   
		  </div>
		  
		  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
			
		</div>

		<?php
		if (isset($_POST['submit'])) {
			//capture
			$fileName = $_POST['name'];

			//echo "$fileName";
			//
			$name = $_FILES['file']['name'];
			# code...
			//the directory to upload to
			$targetDir = "uploads/";
			//the file being upload
			$targetFile = $targetDir.basename($_FILES['file']['name']);

			//select the file type - file extension
			$fileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

			//valid extension - retric only file
			//upload the file
			//- move to server
			move_uploaded_file($_FILES['file']['tmp_name'], $targetDir.$name);
		}else{
			echo "No clicked";
		}

		?>
		
	</div>

</body>
</html>