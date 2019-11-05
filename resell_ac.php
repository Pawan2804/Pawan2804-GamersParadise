<?php
include "conn_db.php";  
$msg="";
if(isset($_POST['Submit'])){
  $Name=$_POST['name'];
  $Price=$_POST['price'];
  $Desc=$_POST['desc'];
  $Date=$_POST['date'];
  $Image = $_FILES['image']['name'];
  //echo($desc.$name.$price);
  
  $Name=mysqli_real_escape_string($con,$Name);
  $Date=mysqli_real_escape_string($con,$Date);
  $Price=mysqli_real_escape_string($con,$Price);
  $Desc=mysqli_real_escape_string($con,$Desc);

  $target = "old_games/".basename($_FILES['image']['name']);
  $insert="INSERT INTO resell(game_name,game_price,game_description,date_of_purchase,image)VALUES('$Name','$Price','$Desc','$Date','$Image')";
  $result_for_insert=mysqli_query($con,$insert);
  if($result_for_insert){
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
    //header("Location: profile.php");   
}
}
?>