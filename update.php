<?php
include 'up.php';

?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>update</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-2">
			
		</div>
		<div class="col-md-8"><br>
			<h2 class="text-center bg-dark text-light"><b>UPDATE DATA</b> </h2>
			<div>
			<form action="insert.php" method="post">
                    <label for="name"> </label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
                    <label for="email"></label>
                    <input type="email" name="email" placeholder="Enter Your Email" class="form-control" required>
                    <label for="numbar"></label>
                    <input type="numbar" name="phone" placeholder="Enter Your Phone" class="form-control" required>
                    <label for="text"></label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Your password" required>
                    <label for="text"></label>
                    <input type="file" name="photo" class="form-control" placeholder="Enter Profile pic" required>
                  <br>
                    <button class="btn btn-danger ml-2" id="submit"onclick="return confirm('Are you sure want to submit this page?')">Submit</button>
                    
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>


                </form>                               
			</div>
			
		</div>
		<div class="col-md-2">
			
		</div>
	</div>
	<div>
		
</body>
</html>