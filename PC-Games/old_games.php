<!DOCTYPE html>
<html>
<head>
  <title>Buy All The Games You Want</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/modern-business.css">
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
    <script>function bookmark(){this.getAttribute('href')}</script>
</head>
<body>

  <!-- Navigation -->
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

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('img/elder.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Elder Srolls</h3>
            <p>Dragons fizzle but Necromancers arrive to save the day.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/dark_souls.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Dark Souls</h3>
            <p>The action roleplaying game makes a masterful return to Lordran</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/dota2.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Dota 2</h3>
            <p>The action roleplaying game makes a masterful return to Lordran</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>
  <!-- Page Content -->
    
    <h1 class="my-4">Buy From A Variety Of Games</h1>

    <!-- Portfolio Section -->
<style type="text/css">
  .col-sm-6{
    max-width: 30%;
  }
</style>
        <div class="row">  
              <?php              
              include "conn_db.php";
              $query= "SELECT * FROM resell where verified='y'";
              $result=mysqli_query($con,$query);
                if($result)
              {
               while($result1 = mysqli_fetch_object($result))
              {
                $name=($result1->game_name);
            
                ?>
                <div class="col-lg-4 col-sm-6 portfolio-item"> 
                <div class="container"> 
                 <div class="card h-100">
                  <img class="card-img-top"
                  <?php printf( "img src=../new_games/".$result1->image);?>> 
                <div class="card-body">
               <h4 class="card-title">
                        
          </a>
            </h4>
            <h4 class="card-title">
              <?php printf("MRP:- ₹%s",$result1->game_price);?>
            </h4>
            <h4 class="card-title">
                 <a href=game_details_old.php?game=old&name=<?php echo urlencode($name);?>>
              <?php printf("%s",$result1->game_name);          
            ?>            
          </a>
            </h4>
             <h5>
            <?php printf("Release Date-%s",$result1->release_date);  
            $pop=""      
            ?>
            </h5>
            <button type="button" class="btn btn-warning"><a href=game_details_old.php?name=<?php echo urlencode($name);?>>View Deal</button></a>
            <br>        
            </div>
          </div>
        </div>
      
      </div>
      <?php
      }
    }
      ?>
   </div>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Gamer's Paradise 2019</p>
    </div>
    <!-- /.container -->
  </footer>
  <!-- Bootstrap core JavaScript -->

</body>
</html>