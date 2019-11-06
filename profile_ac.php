<?php  include "conn_db.php";
session_start();
$id=$_SESSION['id'];
$query="SELECT * FROM cus_register WHERE uid=$id";
$result=mysqli_query($con,$query);


$row = mysqli_fetch_object($result);