<?php
  if($_SERVER["REQUEST_METHOD"]=="POST")
     $email=$_POST["email"];
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $username=$_POST["username"];
    $password=$_POST["Password"];
   $passwordhash=password_hash($password,$passwordhash);

   $insert="insert into `users`(Email,Firstname,Lastname,Username,Password) values('$email',
   '$firstname','$lastname','$username','$passwordhash')"
?>