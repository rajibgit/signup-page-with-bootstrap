<?php require "config/config.php"; ?>

<?php 

if((isset($_POST['submit']))){
	echo "IT IS SET";

}
     else{
     echo "it is not set";
          }
          ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>phpcrud</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="col-lg-6 col-lg-offset-3">
					<h3>Signup</h3>
					<hr>
					<form name="signup" id="signup"action="<?<?php $_SERVER['PHP_SELF'] ?>" method="POST">
						<div class="form-group">
							<label for="fullname">Fullname</label>
							<input name="fullname" id="fullname"type="text" class="form-control"placeholder="fullname">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input name="email" id="email" type="text" class="form-control"placeholder="email">
						</div>
						<div class="form-group">
							<label for="username">Username</label>
							<input name="username" id="username" type="email" class="form-control"placeholder="username">
						</div>
						<div class="form-group">
							<label for="">Password</label>
							<input name="password" id="password" type="text" class="form-control"placeholder="password">
						</div>
						
						<div class="form-group">
							<button name="submit" id="submit"class="btn-primary btn-block">Sign Up</button>
							
						</div>
						
					</form>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</body>
</html>