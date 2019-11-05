<?php
include ("conn_db.php");  
$msg="";
if(isset($_POST['Submit'])){
  $image = $_FILES['image']['name'];
  $password=$_POST['password'];
  $name=$_POST['name'];
  $username=$_POST['username'];
  $mobile=$_POST['mob'];
  $email=$_POST['email'];
  
  $Name=mysqli_real_escape_string($con,$name);
  $Date=mysqli_real_escape_string($con,$username);
  $password=mysqli_real_escape_string($con,$password);
  $email=mysqli_real_escape_string($con,$email);
  $mobile=mysqli_real_escape_string($con,$mobile);

  $target = "profile_pic/".basename($_FILES['image']['name']);
  $inserting_into_games="INSERT INTO cus_register(name,username,password,mobile_no,email,pro_pic)VALUES('$name','$username','$password',$mobile,'$email','$image')";
  $result_for_insert=mysqli_query($con,$inserting_into_games);
  if($result_for_insert){
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
      header("Location: login.php");
    }else{
      $msg = "Failed to upload image";
    }
    
  }

    
       
}
?>