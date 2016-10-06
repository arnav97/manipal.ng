<?php
  
   require_once "config.php";
  
   $email=$_POST['email'];

   $username=$_POST['username'];

   $password=$_POST['password'];

   $sql="INSERT INTO `users` (`username`, `email`, `password`) values('".$username."','".$email."','".$password."')";
   
   $mysql->query($sql);

   header('Location:signup.php');
   //$userData=$_POST;
   //print_r($userData);
?>