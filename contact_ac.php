<?php
include "conn_db.php";  
if(isset($_POST['Submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $msg=$_POST['msg'];



   $Name=mysqli_real_escape_string($con,$name);
   $Email=mysqli_real_escape_string($con,$email);
   $Msg=mysqli_real_escape_string($con,$msg);

  $inserting_into_contact="INSERT INTO contact(name,email,msg)VALUES('$Name','$Email','$Msg')";
    $result_for_insert=mysqli_query($con,$inserting_into_contact);
  if($result_for_insert)
  	header('location:thank_u.php'); 

}
  ?>

