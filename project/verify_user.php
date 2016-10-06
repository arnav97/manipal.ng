<?php

/*
  $email=$_POST['email'];
  $password=$_POST['password'];
  print_r($_POST);
*/
require_once "config.php";
 session_start();
$email=$_POST['email'];

$password=$_POST['password'];

$sql="SELECT * from `users` WHERE `email`='".$email."' AND `password`='".$password."'";
//Result set which contains method for fetching data
$result=$mysql->query($sql);

//Actual user from database
$user=$result->fetch_row();

//validating user
if($user)
{
//user found

 $_SESSION["email"]=$user[2];
 $_SESSION["password"]=$user[3];
 header("Location:dashboard.php");
}
else
{
//user not found
 $_SESSION["message"]="invalid";
 header("Location:index.php");
//echo "invalid";
}
?>