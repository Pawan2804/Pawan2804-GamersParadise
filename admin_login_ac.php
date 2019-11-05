<?php  include "conn_db.php";
if(isset($_POST["submit"])){
	$username=$_POST['username'];
	$password=$_POST['password'];

	$username=mysqli_real_escape_string($con,$username);
  	$password=mysqli_real_escape_string($con,$password);

  	 $query= "SELECT * FROM admin_login where username='$username' and password = '$password'";
  	 $result1=mysqli_query($con,$query);

  	 if(mysqli_num_rows($result1) == 1)
  	 {
        $row = mysqli_fetch_assoc($result1);     
 		header('location:PC-Games/new_games.php');
 	 } 
    else     
         echo"<script>alert('wrong username or password');</script>";   
	}

?>