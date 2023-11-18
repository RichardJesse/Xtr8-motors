<?php
    session_start();
   include("dbconnection.php");
   if($_SERVER["REQUEST_METHOD"]=='POST'){
     $username=$_POST['username'];
     $password=$_POST['password'];
     $usertype=$_POST['accounttype'];
    if($usertype== 'carlover'){
      $sql="Select * from `users` where `Username`='$username' and `Password`='$password'";
      $result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)> 0){
       
        $_SESSION["username"]=$username;
        
        header("location:Audi.php");
        
        
       
} else{
    echo"<script>alert('invalid credentials')</script";
}
}
  else{
    $sql="Select * from `Admin` where `Username`='$username' and `Password`='$password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)> 0){
     
      $_SESSION["username"]=$username;
      
      header("location:Home-Admin.php");
      
      
     
} else{
  echo"<script>alert('invalid credentials')</script";
}
  }
   }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="general.css">
</head>
<body>
<div class="navigation_container">
    <div class="left_container">
        <div class="logo">
            <h2>XLR8 MOTORS</h2>
        </div>
    </div>
    <div class="right_container">
        <a href="registration.php">Signup</a>
        <a href="login.php" class="active">Login</a>
        <a href="">About</a>
    </div>
</div>
<div class="signup">
    <div class="heading">
        <h2>XLR8 Motors Login</h2>
    </div>
    <div class="sign-details">
        <form action="login.php"  method="POST">
            <div class="input-username">
                <input class="username" name="username" type="text" placeholder="Username" required>
                <div class="usererror"></div>
            </div>
            <div class="input-password">
                <input class="pass-word"name="password" type="password" placeholder="Password" required>
                <div class="passworderror"></div>
            </div>
            <div class="">
                <select name="accounttype" id="account" required>
                    <option value="Admin">Admin</option>
                    <option value="carlover">carlover</option>
                </select>
            </div>
            <div class="sign-up-button">
                <input type="submit" id="button" name="login" value="Login" class="button">
            </div>
        </form>
        <div class="link">
            Don't have an account? <a href="registration.php">Signup</a>
        </div>
    </div>

      
        
      </script>
</div>
</body>
</html>