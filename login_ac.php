<?php
session_start();
include "conn_db.php";
if(isset($_POST['submit']))
{
    $username= $_POST['username'];
    $password= $_POST['password'];

    $query= "SELECT * FROM cus_register where username='$username' and password = '$password'";
    
    $result1=mysqli_query($con,$query);
    if(mysqli_num_rows($result1) !=0){
        $row = mysqli_fetch_assoc($result1);
         $id = $row['uid'];
         $email=$row['email'];
        $_SESSION['id'] = $id;
        $_SESSION['email'] = $email;
        echo($_SESSION['id']);
        echo($_SESSION['email']);     
        //header('location:profile.php');   
    } 
    else 
    {
         echo"<script>alert('wrong username or password');</script>";     
    }
    
}
?>