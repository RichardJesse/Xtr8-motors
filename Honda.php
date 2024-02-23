<?php
include("dbconnection.php");
session_start();
 if (!isset($_SESSION['username'])) {
    
    header('location:login.php');
 }



?>


<!DOCTYPE html>
<html>

<head>
    <title>Honda</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="generalhome.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="video.css">
    <link style="height:24px;" rel="icon" href="Honda logo.jpg">
    
</head>

<body style="padding-bottom:200px;">
    <div class="header">
        <div class="leftsection">
            <img class="Vehiclelogo" src="vehicle-icon.jpg">
            <h2 class="companylog">XLR8MOTORS</h2>
        </div>
        <div class="middlesection"></div>
        <div class="rightsection">
            <a href="Audi.php">Home</a>
            
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="sidebar">
            <div class="sidebar-link" id="active">
             <img src="Audi2.jpg">
             <a href="Audi.php" >Audi</a>
            </div>
            <div class="sidebar-link">
             <img src="BMW.jpg">
             <a href="BMW.php">BMW</a>
            </div>
            <div class="sidebar-link">
             <img src="Volkswagen logo.jpg">
             <a href="Volkswagen.php">Volks</a>
            </div>
            <div class="sidebar-link">
             <img src="Toyota.png">
              <a href="Toyota.php">Toyota</a>
            </div>
            <div class="sidebar-link">
             <img src="Honda logo.jpg">
             <a href="Honda.php">Honda</a>
            </div>
            <div class="sidebar-link">
             <img src="Volvo.jpg"></a>
             <a href="Volvo.php">Volvo</a>
            </div>
            <div class="sidebar-link">
             <img src="Mercedez-Benz logo.jpg">
            <a href="Mercedez.php">Mercedez</a>
            </div>
            <div class="sidebar-link">
             <img src="Mazda logo.png">
             <a href="Mazda.php">Mazda</a>
            </div>
            <div class="sidebar-link">
             <img src="Nissan logo.jpg">
             <a href="Nissan.php">Nissan</a>
            </div>
            <div class="sidebar-link">
             <img src="Subaru logo.jpg">
             <a href="Subaru.php">Subaru</a>
            </div>
            
 
          </div>
    <div class="video_grid">
          <?php
         $sql = "SELECT * FROM `vehicles` WHERE `branchphone`='0750234567'";
          $result=mysqli_query($conn,$sql);
         
          
          while($row=mysqli_fetch_array($result)){
           
            $model=$row["carmodel"];
            
            $cost= $row["carcost"];
            $branch=$row["carbranch"];
            $location=$row["carlocation"];
            $plate=$row["carplate"];
            $phone=$row["branchphone"];
            $type=$row["cartype"];
            $image=$row["carimage"];
            
            
           
     
       

            

          
           ?>
       <div class='container1'>
            <div class='photocontainer'>
              <img class='db-imager' src=<?php echo $image; ?> alt=''>
            </div>
            <div class='details'>
              <div class='logo-cont'> <img class='img'src='Honda logo.jpg' alt=''>
          </div>
             
              
               <p>car model:<?php echo $model; ?></p>
               <p>car cost:ksh <?php echo $cost; ?></p>
               <p>car branch:<?php echo $branch; ?></p>
               <p>car branch no:<?php echo $phone; ?></p>
               <p> car location:<?php echo $location; ?></p>
               <p> car type:<?php echo $type; ?></p>
            </div>
        </div>
           
        
        <?php
          }
        ?>          

       </div>
   
    
</body>

</html>