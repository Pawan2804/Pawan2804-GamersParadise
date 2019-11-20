<?php  include "conn_db.php";
session_start();
$id=$_SESSION['id'];
$query="SELECT * FROM cus_register WHERE uid=$id";
$result=mysqli_query($con,$query);
$query2="SELECT * FROM orders WHERE user_id=$id";
$result2=mysqli_query($con,$query2);

$row = mysqli_fetch_object($result);