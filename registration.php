<?php
  include("dbconnection.php");
  include("registerfunction.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="navigation.css">
     <link rel="stylesheet" href="general.css">
</head>
<body>
<div class="navigation_container">
     <div class="left_container">
       <div class="logo">
          
          <h2>XLR8 MOTORS</h2></div>   
     </div>
         <div class="right_container">
            
            <a href="registration.html" class="active">Signup</a>
          <a href="login.html" >Login</a>
          <a href="">About</a>
         </div>
     </div>
        <div class="signup">
          <div class="heading">
         <h2>XLR8 Motors</h2>
     </div>
              
                <div class="sign-details">
                  <form action="registration.php" method="Post">
                    <div class="input-mobile">
                      <input class="email" type="email" name="email" placeholder="email" min="0" max="11">
                         <div class="mobileerr"></div>
                        </div>
                        <div class="input-name">
                        <input class="name" type="text" id="firstname" name="firstname" placeholder="First Name">
                         <div class="nameerr"></div>
                        </div>
                        <div class="input-name">
                         <input class="name" type="text" id="lastname" name="lastname" placeholder="last Name">
                          <div class="lnameerr"></div>
                         </div>
                        <div class="input-username">
                        <input class="username" type="text" placeholder="Username" name="username">
                        <div class="usernameerr"></div>
                        <div></div>
                        </div>
                        <div class="input-password">
                        <input class="pass-word" type="password" placeholder="Password" name="password" required>
                        <div class="passerr"></div>
                        </div>
                        <div class="sign-up-button">
                         <input type="submit" id="button" value="signup" class="button">
                        </div>
                           <div class="link">
                              Have an Account? <a href="login.html">login</a>
                           </div>
            
                        <div>
                            <h2 style="text-align: center;
                            color:black;">Registration form</h2>
                        </div>
                    
                
                   
                </div>
                  </form>
                  
              
              <script src="registration.js"></script>
        
         
         
         </div>
 
 
        
 
 
 
     </div>
</body>
</html>