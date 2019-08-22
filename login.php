<?php require 'config/conn.php'; ?> <!--------FOR CONNECTION WITH DB---------->
<?php require 'php/loginRequest.php'; ?> <!--------Login Request File ---->
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<br>
	<br>
	<br>
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-sm-4 border-primary border">
				<center><h2>Admin</h2></center>
				<br>
				<form action="" method="POST">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" autocomplete="off" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pass" autocomplete="off" class="form-control">
					</div>
					<center><input type="submit" name="sub" value="Submit" class="btn btn-primary"></center>
					<br>
				</form>
			</div>
		</div>
	</div>
</body>
</html>