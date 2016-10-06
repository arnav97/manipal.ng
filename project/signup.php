<!DOCTYPE html>
<html>
<head>
	<title>project</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1 id="header" class="text-center" >SignUp Form</h1>
		</div>
		<div class="row">
			<div class="col-md-4">
				
			</div>
			<div class="col-md-4">
				<form name="loginForm" action="add_user.php" method="POST">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" id="name" class="form-control" name="username" />
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" id="email" class="form-control" name="email" />
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" id="password" class="form-control" name="password" />
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-danger form-control" value="Login">
					</div>
				</form>
			</div>
			<div class="col-md-4">
				
			</div>
		</div>
	</div>
</body>
</html>