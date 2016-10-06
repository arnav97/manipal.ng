<?php

session_start();

$db=mysqli_connect("localhost","root", '',"login");
if(isset($_POST['submit']))
 {
  session_start();
  $username = mysql_real_escape_string($_POST['username']);
  $email = mysql_real_escape_string($_POST['email']);
  $password = mysql_real_escape_string($_POST['password']);
  $password2 = mysql_real_escape_string($_POST['password2']);

  if($password == $password2)
  { 
    //creating user
     $password = md5($password);//hash password before storing for security purposes
     $sql = "INSERT INTO web(username,email,password) VALUES('$username', '$email', '$password')";
     mysqli_query($db,$sql);
     $_SESSION['message'] = "You are now logged in";
     $_SESSION['username'] = $username;
     header("location: dash.php"); 
  }
   else
   {
     $_SESSION['message'] = "The two password do not match";
   }
 }
?>
<!DOCTYPE html>
<html>
<head>
<title>SignUp</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
 <body>
  <div class="container">
   <div class="jumbotron text-center">
    <h2 id="header" class="loginform">Sign up</h2>
     </div>
      <div class="row">
       <div class="col-md-4"></div>
        <div class="col-md-4">
         <form name="loginform">
          <div class="form-group">
           <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" />
             </div>
              <div class="form-group">
               <label for="Email Address">Email address:</label>
                <input type="email" class="form-control" id="Email Address" name="email" /> 
                 </div>
                 <p>we will never share your id with anyone else</p>
                 <div class="form-group">
                <label for="Password">Password:</label>
               <input type="password" class="form-control" id="Password" name="password">
              </div>
             <div class="form-group">
            <label for="Password">Re-enter Password:</label>
           <input type="password" class="form-control" id="Password" name="password2">
          </div>
         <div class="form-group">
        <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
       <button type="reset" class="btn btn-primary">Reset</button>
      <a href="login.php"><button type="button" class="btn btn-success">Go Back</button></a>
     </div>
    </form>
   </div>
  </div>
 </div>
</body>
</html>