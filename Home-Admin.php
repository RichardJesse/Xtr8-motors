<?php
 include("dbconnection.php");
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Home-Admin.css">
</head>
<body>
    <!-- Creating the navigation header and sidebar -->
    <div class="Admin-navigationbar">
        <div class="left-container">
            <div class="image-container">
                <img class="hambuger-icon" src="icon folder/hamburger-menu.svg" alt="">
            </div>
            <div class="Admin-logo-container">
                <h2>Admin</h2>
            </div>
        </div>
        <div class="right-container">
            <div class="web-logo">
                <h2>XLR8 Motors</h2>
            </div>
        </div>
    </div>
    <div class="sidebar">
        <div class="link-container" id="active">
            <a class="sidebarlink" href="Home-Admin.php"> <img src="icon folder/home (1).svg" alt=""><p>Home</p></a>
        </div>
        <div class="link-container" >
            <a class="sidebarlink" href="Admin.php"><img class="carimage" src="icon folder/images-cars.png" alt=""><p>Cars</p></a>
        </div>
        <div class="link-container" >
            <a class="sidebarlink" href="Users.php"><img class="userimage" src="icon folder/images-users.jpg" alt=""><p>Users</p></a>
        </div>
        <div class="link-container">
            <a class= "sidebarlink" href=""><img class="logoutimage" src="icon folder/download-logout.jpg" alt=""><p>Logout</p></a>
        </div>
    </div>
    <!-- Creating a table for viewing users details from the database -->
    <div class="vehicle-contentpage">
        <div class="stats-headbar">
             <h2>Stats</h2>
        </div>
        
        <div class="box-container">
    <div class="user-quantity-container">
        <div class="user-header">
        Users
        </div>
        <div class="user-quantity">
           <h1><?php
           $countuserquery="select count(*) as countuser from `Users`";
           $usercountresult= mysqli_query($conn,$countuserquery);
            $countuser=mysqli_fetch_assoc($usercountresult);
          echo $countuser['countuser'];?>
           </h1>
        </div>
      
    </div>
    <div class="vehicle-quantity-container">
       <div class="vehicle-header">
        Vehicles
       </div >
   
        <div class="vehicle-quantity">
          <h1><?php
           $countvehiclesquery="select count(*) as countvehicles from `vehicles`";
           $vehiclecountresult= mysqli_query($conn,$countvehiclesquery);
            $countvehicles=mysqli_fetch_assoc($vehiclecountresult);
          echo $countvehicles['countvehicles'];?></h1> 
         
        </div>
    </div>
    <script src="sidebar.js"></script>
</body>
</html>
  
  