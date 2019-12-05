<?php
session_start();
include "conn_db.php";
$idd=$_SESSION['id'];
$email1=$_SESSION['email'];
echo($email1);
if($idd!=0){
if(isset($_GET['name'])){
	$game_name= $_GET['name'];
	$id= $_GET['id1'];
	$query="INSERT INTO orders2(game_id,user_id,game_name)VALUES('$id','$idd','$game_name')";
	$result_for_insert=mysqli_query($con,$query);
	if($result_for_insert){
		

          require 'PHPMailerAutoload.php';
          require 'cred.php';
          $mail = new PHPMailer;
        $mail->SMTPDebug = 1;                               // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = Email;                 // SMTP username
        $mail->Password = Pass;                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        $mail->setFrom(Email, 'Pawan');
        $mail->addAddress($email1,);     // Add a recipient
        $mail->addReplyTo(Email);
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject ="YOUR ORDER COFIRMATION!!";
        $mail->Body    ="Thank you for Ordering from gamer's Paradise\n Your Order details:".$game_name;

              //$mail->AltBody = ;
              if(!$mail->send()) {
                  echo 'Message could not be sent.';
                  echo 'Mailer Error: ' . $mail->ErrorInfo;
} 
}
header("Location: ../thank.php");
	}

}
else
 	header("Location: ../login.php");
?>