<?php
 include("dbconnection.php");
 $id=$_GET['updateid'];
 $select="Select * from `vehicles` where `id` =$id";
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
 }

 if($_SERVER["REQUEST_METHOD"]==='POST'){
    $model=$_POST["carmodel"];
  $brand=$_POST["carbrand"];
  $cost= $_POST["carcost"];
  $branch=$_POST["carbranch"];
  $location=$_POST["carlocation"];
  $plate=$_POST["carplate"];
  $phone=$_POST["branchphoneno"];
  $type=$_POST["cartype"];
 
  $image=$_FILES['carimage']['name'];
    //getting the file extension
    $imagefiletype=strtolower(pathinfo($image,PATHINFO_EXTENSION));
    $extensionsarr=array("jpg","jpeg","png","svg");
    if(in_array($imagefiletype,$extensionsarr)){
        $upload_dir='images/'.$image;
        move_uploaded_file($_FILES['carimage']['tmp_name'],$upload_dir);
    }
  $sql = "UPDATE `vehicles` SET carmodel='$model', carbrand='$brand',carcost='$cost',
 carbranch='$branch',carlocation='$location',carplate='$plate',branchphone='$phone',
 cartype='$type',carimage='$upload_dir'WHERE id=$id"; 

  $result=mysqli_query($conn,$sql);

  if($result){


    header("location:View.php");
  }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
<div class="signup">
            <div class="heading">
                <h2>Update Car</h2>
            </div>
            <div class="sign-details">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="input-model">
                        <input class="car-name" value="<?php echo $model ?>" type="text" name="carmodel" placeholder="Car Model">
                
                       
                    </div>
                    <div class="input-cost">
                        <input class="car-brand"value="<?php echo $brand?>" type="text" name="carbrand" placeholder="Car Brand">
                    </div>
                    <div class="input-cost">
                        <input class="car-cost" value="<?php echo $cost?>" type="number" name="carcost" placeholder="Car Cost">
                    </div>
                    <div class="input-branch">
                        <input class="car-branch" value="<?php echo $branch?>" type="text" name="carbranch" placeholder="Car Branch">
                    </div>
                    <div class="input-location">
                        <input class="car-location" value="<?php echo $location?>" type="text" name="carlocation" placeholder="Car Location">
                    </div>
                    <div class="input-plate">
                        <input class="number-plate" value="<?php echo $plate?>" type="text" name="carplate" placeholder="Number Plate">
                    </div>
                    <div class="input-branchphone">
                        <input class="branch-number" value="<?php echo $phone?>" type="text" name="branchphoneno" placeholder="Branch phonenumber">
                    </div>
                    <div class="car-type">
                        <select class="selectgari" name="cartype" id="cartype"value="<?php echo $type?>">
                            <option value="firstHand">First Hand</option>
                            <option value="secondHand">Second Hand</option>
                        </select>
                    </div>
                    <div class="input-image">
                        <input class="car-image" value="<?php echo $image?>" type="file" name="carimage" id="carimage">
                    </div>
                    <div class="sign-up-button">
                        <input type="submit" id="button" value="update" class="button" name="addbutton">
                    </div>
                </form>
            </div>
        </div>
</body>
</html>