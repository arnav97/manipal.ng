<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
 <body bgcolor="#E6E6FA">
  <div class="container">
   <div class="jumbotron text-center">
    <h2 id="header" class="loginform">Login To Your Account</h2>
     </div>
      <div class="row">
       <div class="col-md-4"></div>
        <div class="col-md-4">
         <form name="loginform">
          <div class="form-group">
           <label for="email">Username or Email:</label>
            <input type="text" class="form-control" id="email"/>  
            <div class="form-group">
             <label for="password">Password:</label>
              <input type="password" class="form-control" id="password"/> 
             </div>
            <div class="form-group">
            <input class="form-check-input" type="checkbox">Save Password
             <a href="dash.php"><button type="submit" class="btn btn-primary">Log In</button></a>
          <a href="signup.php"><button type="submit" class="btn btn-outline-info">Sign Up</button></a>
          <br>
         <a href="forgot.php"><mark>Forgot Password?</mark></a>
        </div>
       <div class="form-group">
       <img src="1.jpg" class="img-rounded">
     </div>
    </form>
   </div>
  </div>
 </div>
</body>
</html>