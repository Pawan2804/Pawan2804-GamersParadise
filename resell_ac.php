<?php
include "conn_db.php";
session_start();
$id=$_SESSION['id'];  
$msg="";
if(isset($_POST['Submit'])){
  $Name=$_POST['name'];
  $Price=$_POST['price'];
  $Desc=$_POST['desc'];
  $Date=$_POST['date'];
  $Image = $_FILES['image']['name'];
  
  $Name=mysqli_real_escape_string($con,$Name);
  $Date=mysqli_real_escape_string($con,$Date);
  $Price=mysqli_real_escape_string($con,$Price);
  $Desc=mysqli_real_escape_string($con,$Desc);

  $target = "old_games/".basename($_FILES['image']['name']);
  $insert="INSERT INTO resell(uid,game_name,game_price,game_description,release_date,image,verified)VALUES('$id','$Name','$Price','$Desc','$Date','$Image','n')";
  $result_for_insert=mysqli_query($con,$insert);
  if($result_for_insert){
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
      header("Location: profile.php");  
    }else{
      $msg = "Failed to upload image";
    }
     
}
}
?>