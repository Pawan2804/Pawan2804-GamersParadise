<?php
include "conn_db.php";  
if(isset($_POST['Submit'])){
  $subject=$_POST['name'];
  $email=$_POST['email'];
  $body=$_POST['msg'];
  require 'PHPMailerAutoload.php';
   require 'cred.php';

   $subject=mysqli_real_escape_string($con,$subject);
   $Email=mysqli_real_escape_string($con,$email);
   $Msg=mysqli_real_escape_string($con,$body);

  $inserting_into_contact="INSERT INTO contact(name,email,msg)VALUES('$subject','$Email','$Msg')";
    $result_for_insert=mysqli_query($con,$inserting_into_contact);
  if($result_for_insert)
  	header('location:thank_u.php');

$mail = new PHPMailer;
$mail->SMTPDebug = 4;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = Email;                 // SMTP username
$mail->Password = Pass;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->setFrom(Email, 'Pawan');
$mail->addAddress($email,);     // Add a recipient
$mail->addReplyTo(Email);
$mail->isHTML(true); // Set email format to HTML
$mail->Subject ="FEEDBACK!!";
$mail->Body    ="Thank YOU FOR YOUR FEED BACK WE'LL GET BACK TO YOU AS SOON AS POSSIBLE";

//$mail->AltBody = ;
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 
}

  ?>

