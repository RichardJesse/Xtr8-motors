<?php
  if($_SERVER['REQUEST_METHOD']==='POST'){
    //Sanitizing input to prevent injections
    $carmodel=filter_input(INPUT_POST,"carmodel",FILTER_SANITIZE_SPECIAL_CHARS);
    $carbrand=filter_input(INPUT_POST,"carbrand",FILTER_SANITIZE_SPECIAL_CHARS);
    $carcost=filter_input(INPUT_POST,"carcost",FILTER_SANITIZE_NUMBER_INT);
    $carbranch=filter_input(INPUT_POST,"carbranch",FILTER_SANITIZE_SPECIAL_CHARS);
    $carlocation=filter_input(INPUT_POST,"carlocation",FILTER_SANITIZE_SPECIAL_CHARS);
    $carplate=filter_input(INPUT_POST,"carplate",FILTER_SANITIZE_SPECIAL_CHARS);
    $cartype=filter_input(INPUT_POST,"cartype",FILTER_SANITIZE_SPECIAL_CHARS);
    $branchphone=filter_input(INPUT_POST,"branchphoneno",FILTER_SANITIZE_SPECIAL_CHARS);
    
    $carimage=$_FILES['carimage']['name'];
    //getting the file extension
    $imagefiletype=strtolower(pathinfo($carimage,PATHINFO_EXTENSION));
    $extensionsarr=array("jpg","jpeg","png","svg");
    if(in_array($imagefiletype,$extensionsarr)){
     $upload_dir='images/'.$carimage;
     move_uploaded_file($_FILES['carimage']['tmp_name'],$upload_dir);
       $insert="insert into `vehicles`(carmodel,carbrand,carcost,carbranch,carlocation,
       carplate,branchphone,cartype,carimage) values(' $carmodel',' $carbrand',
       '$carcost','$carbranch','$carlocation','$carplate','$branchphone','$cartype',
       '$upload_dir')";
       $result=mysqli_query($conn,$insert);
       if(!$result){
        echo "data not inserted successfully";
       }


     
   
     


    }
    

  }