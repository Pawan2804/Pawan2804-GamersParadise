<?php
//include "register_ac.php";
?>
<head>
   <title>Welcome To Gamers Paradise</title>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="css/register.css">
<link rel="stylesheet" type="text/css" href="Pc-Games/css/modern-business.css">
<!------Header---------->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Gamer's Paradise</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Main Page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="Pc-Games/new_games.php">New PC games</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Pc-Games/old_games.php">Old PC games</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="profile.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="old_game_register.php">Sell your games</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<form action="register_ac.php" method="post" enctype="multipart/form-data">
  <label>
  	<label>
    <p class="label-txt">ENTER YOUR NAME</p>
    <input type="text" class="input" name="name">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR USER NAME</p>
    <input type="text" class="input" name="username">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR PASSWORD</p>
    <input type="PASSWORD" class="input" name="password">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
   <label>
    <p class="label-txt">CONFIRM YOUR PASSWORD</p>
    <input type="PASSWORD" class="input">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
   <label>
    <p class="label-txt">ENTER YOUR MOBILE NUMBER</p>
    <input type="text" class="input" name="mob">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR EMAIL</p>
    <input type="EMAIL" class="input" name="email">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
   <label>
    <p class="label-txt">Got a profile pic?</p>
    <input type="file" class="input" name="image">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

  <button type="submit" name="Submit">submit</button>
</label>
</form>



<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Gamer's Paradise 2019</p>
    </div>
    <!-- /.container -->
  </footer>