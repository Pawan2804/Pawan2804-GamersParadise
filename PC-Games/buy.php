<?php
session_start();
include "conn_db.php";
$idd=$_SESSION['id'];
if($idd!=0){
if(isset($_GET['name'])){
	$game_name= $_GET['name'];
	$id= $_GET['id1'];
	$query="INSERT INTO orders2(game_id,user_id,game_name)VALUES('$id','$idd','$game_name')";
	$result_for_insert=mysqli_query($con,$query);
	if($result_for_insert){
		header("Location: ../thank.php");
	}

}
}
else
 	header("Location: ../login.php");
?>