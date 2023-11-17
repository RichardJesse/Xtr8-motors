<?php
    if($_SERVER["REQUEST_METHOD"]==='POST'){
       if(isset($_POST['delete'])){
       $id=$_POST['id'];
       $delete="Delete from `vehicles` where id=$id";
       $result=mysqli_query($conn,$delete);
       if($result){
        header("location:View.php");
       }
       else{
         echo"error".mysqli_error($conn);
       }
    }
}
  
  ?>
