<?php
session_start();
include "conn_db.php";
$idd=$_SESSION['id'];
if($idd!=0){
if(isset($_GET['name'])){
	echo("name");
	$game_name= $_GET['name'];
	$id= $_GET['id1'];
	$query="INSERT INTO orders(game_id,user_id,game_name)VALUES('$id','$idd','$game_name')";
	$result_for_insert=mysqli_query($con,$query);
	if($result_for_insert){
		header("Location: ../profile.php");
	}

}
}
else
 	header("Location: ../login.php");
?>