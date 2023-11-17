<?php
  include("dbconnection.php");
  include("Addvehicle.php")
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Admin.css">
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
        <div class="link-container">
            <a class="sidebarlink" href="Home-Admin.php"> <img src="icon folder/home (1).svg" alt=""><p>Home</p></a>
        </div>
        <div class="link-container" id="active">
            <a class="sidebarlink" href="Admin.php"><img class="carimage" src="icon folder/images-cars.png" alt=""><p>Cars</p></a>
        </div>
        <div class="link-container">
            <a class="sidebarlink" href="Users.php"><img class="userimage" src="icon folder/images-users.jpg" alt=""><p>Users</p></a>
        </div>
        <div class="link-container">
            <a class= "sidebarlink" href=""><img class="logoutimage" src="icon folder/download-logout.jpg" alt=""><p>Logout</p></a>
        </div>
    </div>
    <!-- Creating a form for adding vehicles into the database -->
    <div class="vehicle-contentpage">
        <div class="vehicle-headbar">
            <a id="active" href="Admin.php">Add Vehicles</a>
            <a href="View.php">View List</a>
        </div>
        <div class="signup">
            <div class="heading">
                <h2>Add Car</h2>
            </div>
            <div class="sign-details">
                <form action="Admin.php" method="POST" enctype="multipart/form-data">
                    <div class="input-model">
                        <input class="car-name" type="text" name="carmodel" placeholder="Car Model">
                
                       
                    </div>
                    <div class="input-cost">
                        <input class="car-brand" type="text" name="carbrand" placeholder="Car Brand">
                    </div>
                    <div class="input-cost">
                        <input class="car-cost" type="number" name="carcost" placeholder="Car Cost">
                    </div>
                    <div class="input-branch">
                        <input class="car-branch" type="text" name="carbranch" placeholder="Car Branch">
                    </div>
                    <div class="input-location">
                        <input class="car-location" type="text" name="carlocation" placeholder="Car Location">
                    </div>
                    <div class="input-plate">
                        <input class="number-plate" type="text" name="carplate" placeholder="Number Plate">
                    </div>
                    <div class="input-branchphone">
                        <input class="branch-number" type="text" name="branchphoneno" placeholder="Branch phonenumber">
                    </div>
                    <div class="car-type">
                        <select class="selectgari" name="cartype" id="cartype">
                            <option value="firstHand">First Hand</option>
                            <option value="secondHand">Second Hand</option>
                        </select>
                    </div>
                    <div class="input-image">
                        <input class="car-image" type="file" name="carimage" id="carimage">
                    </div>
                    <div class="sign-up-button">
                        <input type="submit" id="button" value="Add" class="button" name="addbutton">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="sidebar.js"></script>
</body>
</html>
