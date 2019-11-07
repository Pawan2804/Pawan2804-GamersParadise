<?php
include "conn_db.php";
$Sc=$_GET['name'];
$query= "SELECT * FROM resell WHERE game_name='$Sc'";
$result=mysqli_query($con,$query);
	if($Sc!=null){
    if($result)
    {
       while($result1 = mysqli_fetch_object($result))
      {
      	
?>
<head>
  <title>Buy All The Games You Want</title>
  <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="game_detail.css">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
      img.card-img-top{
          width: 100%;
          height: 100%;
      }
      .me{
        align-content: center;
      }
    </style>
</head>
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Gamer's Paradise</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Main Page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="old_games.php">Old games</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="card">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">

                    <div class="preview-pic tab-content">
                 
                        <div class="tab-pane active" id="pic-1">
                        	<img width="300px" height="300px" margin-left="100px"
                        	<?php printf( "src=../new_games/".$result1->image);?>></div>
                        		
                        	
                    </div>

                </div>
                <div class="details col-md-6">
                    <div class="panel panel-default text-center">
                        <h3><div class="panel-title"><span class="glyphicon glyphicon-list-alt"></span>   Name</div></h3>
                        <hr>
                    <h4><?php printf("%s ",$result1->game_name);?></h4>
                    </div>
                    <div class="panel panel-default text-center">
                            <h3><div class="panel-title"><span class="glyphicon glyphicon-scissors"></span>For trailer</div></h3>
                            <hr>
                       <h3><?php printf("%s",$result1->date_of_purchase);?></h2>  
                        <br>
                    </div></h3>
                    <div class="panel panel-default text-center">
                        <h3><div class="panel-title"><span class="glyphicon glyphicon-comment"></span>   Description</div></h3>
                        <hr>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget nibh at dui tincidunt lacinia imperdiet vel turpis. Donec nec felis ornare, porta diam quis, convallis odio. In tincidunt, dui euismod pharetra ultricies, purus purus cursus felis, vitae lacinia elit libero sed </h4>
                    </div>
                    <div class="panel panel-default text-center">
                        <h3><div class="panel-title"><span class="glyphicon glyphicon-credit-card"></span>  RATE</div></h3>
                        <hr>
                        <h2><font color="purple"><?php printf("Rs.%s",$result1->game_price);?></h2>   </font>                 </div>
                    <div class="panel panel-default text-center">
                            <h3><div class="panel-title"><span class="glyphicon glyphicon-scissors"></span>  Release Date</div></h3>
                            <hr>
                       <h3><?php printf("%s",$result1->date_of_purchase);?></h2>  
                        <br>
                    </div></h3>
                    <div class="text-center">
                    	<form action="game_details_old.php" method="post"></form>
                        <button class="add-to-cart btn btn-default" type="button"><span class="glyphicon glyphicon-gift"></span> Buy</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<?php
}
}
}
else
header('location:old_games.php');
?>