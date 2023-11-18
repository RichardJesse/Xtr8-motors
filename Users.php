<?php
 include("dbconnection.php");
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Users.css">
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
        <div class="link-container" >
            <a class="sidebarlink" href="Admin.php"><img class="carimage" src="icon folder/images-cars.png" alt=""><p>Cars</p></a>
        </div>
        <div class="link-container" id="active">
            <a class="sidebarlink" href="Users.php"><img class="userimage" src="icon folder/images-users.jpg" alt=""><p>Users</p></a>
        </div>
        <div class="link-container">
            <a class= "sidebarlink" href=""><img class="logoutimage" src="icon folder/download-logout.jpg" alt=""><p>Logout</p></a>
        </div>
    </div>
    <!-- Creating a table for viewing users details from the database -->
    <div class="vehicle-contentpage">
        <div class="user-headbar">
             <h2>User data</h2>
        </div>
         
        
           <div class="table-container">
             <table  >
                <tr>
                <th>id</th>
                <th>MobileNumber</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Username</th>
                <th>Password</th>
                 <th>Update</th>
                 <th>Delete</th>
                 
                 </tr>
                 <?php
                  $select="Select * from `Users`";
                  $result=mysqli_query($conn,$select);
                  if($result)
                  while($row=mysqli_fetch_assoc($result)){
                   $id= $row["id"];
                   $MobileNumber=$row["MobileNumber"];
                   $FirstName=$row["Firstname"];
                   $LastName= $row["Lastname"];
                   $Username=$row["Username"];
                   $Password=$row["Password"];
                   
                   echo 
                   "<tr>
                   <td>{$id}</td>
                   <td>{$MobileNumber}</td>
                   <td>{$FirstName}</td>
                   <td>{$LastName}</td>
                   <td>{$Username}</td>
                   <td>{$Password}</td>
                   <td>
                   <button>update</button>
                   </td>
                   <td>
                   <button>delete</button>
                   </td>
                   
                    
                    
                   
                   
                    
                
                </tr>";
       }
       ?>  

  </table>       
    </div>      
    <script src="sidebar.js"></script>
</body>
</html>
