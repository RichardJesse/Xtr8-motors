<?php
 include("dbconnection.php");
 include("Delete.php");
 session_start();
 if (!isset($_SESSION['username'])) {
    // code...
    header('location:login.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="View.css">
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
            <a class= "sidebarlink" href="logout.php"><img class="logoutimage" src="icon folder/download-logout.jpg" alt=""><p>Logout</p></a>
        </div>
    </div>
    <!-- Creating a table for viewing vehicles details from the database -->
    <div class="vehicle-contentpage">
        <div class="vehicle-headbar">
            <a  href="Admin.php">Add Vehicles</a>
            <a id="active" href="View.php">View List</a>
        </div>
          
           <div class="table-container">
             <table  >
                <tr>
                <th>id</th>
                <th>carmodel</th>
                <th>carbrand</th>
                <th>carcost</th>
                <th>carbranch</th>
                <th>carlocation</th>
                <th>carplate</th>
                 <th>branchphone</th>
                 <th>cartype</th>
                 <th>carimage</th>
                 
                 
                 </tr>
                 
                 <?php
                  $select="Select * from `vehicles`";
                  $result=mysqli_query($conn,$select);
                  while($row=mysqli_fetch_assoc($result)){
                   $id= $row["id"];
                   $model=$row["carmodel"];
                   $brand=$row["carbrand"];
                   $cost= $row["carcost"];
                   $branch=$row["carbranch"];
                   $location=$row["carlocation"];
                   $plate=$row["carplate"];
                   $phone=$row["branchphone"];
                   $type=$row["cartype"];
                   $image=$row["carimage"];
                   echo 
                   "<tr>
                   <td>{$id}</td>
                   <td>{$model}</td>
                   <td>{$brand}</td>
                   <td>{$cost}</td>
                   <td>{$branch}</td>
                   <td>{$location}</td>
                   <td>{$plate}</td>
                   <td>{$phone}</td>
                   <td>{$type}</td>
                   <td><img src=\"{$image}\"/></td>
                    <td><form method='post' action=''>
                    <input type='hidden' name='id' value='{$id}'>
                    <button class='.button' type='submit' name='delete'>Delete</button>
                    </form>
                   
                    <button class='.button'><a href='update.php?updateid={$id}'>Update</a></button>
                    </td>
                    
            
                     
                    
                    
                
                </tr>";
       }
       ?>
   </table>
</div>
   


                  
                 
             </table>
            
           </div>
        </div>
    </div>
    <script src="sidebar.js"></script>
</body>
</html>
