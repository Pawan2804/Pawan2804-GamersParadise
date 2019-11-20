<?php 
include "profile_ac.php";
if($id!=0){
   ?> 

<!DOCTYPE html>
<html>
<head>
    <title></title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="Pc-Games/css/modern-business.css">
<link rel="stylesheet" type="text/css" href="profile.css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
    
</style>
<!------ Include the above in your HEAD tag ---------->
</head>
<!--------Header---------->
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Gamer's Paradise</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Main Page</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                        <img width="300px" hieght="300px"<?php printf( "img src= profile_pic/".$row->pro_pic);?>>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                 <h2>
                                   <?php printf("Hello %s",$row->name);  ?>             
               
                                    </h2>
                                   
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>                   
                            </ul>
                        </div>
                    </div>
                    <br>
                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                    
                            <a href="register.php">Sell</a><br/>
                            <a href="log_out.php">LogOut</a>
                            
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php printf("%s",$row->uid); ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php printf("%s",$row->name);?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php printf(" %s",$row->email); ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php printf(" %s",$row->mobile_no); ?></p>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                                <label>Orders</label>
                                            </div>
                                            <div class="col-md-6">
                                                <?php  while($row2=mysqli_fetch_object($result2))
                                                 { ?>
                                                <p><?php printf(" %s",$row2->game_name);echo("<div>"); }?></p>

                                            </div>
                                        </div>                                        
                                        
                                        </div>
                            </div>
                            
                            </div>
                        </div>
                    </div>
            </form>           
        </body>
</html>
<?php
}
else
header("Location: login.php");
?>
