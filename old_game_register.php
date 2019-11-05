<?php include "resell_ac.php"; ?>

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
<form method="post" enctype="multipart/form-data">
  <label>
    <p class="label-txt">Enter Name of Game</p>
    <input type="text" class="input" name="name">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <label>
    <p class="label-txt">Purchase Date</p>
    <input type="text" class="input" name="date">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">Enter Price</p>
    <input type="text" class="input" name="price">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">Enter Description</p>
    <textarea rows="4" cols="50" name="desc"></textarea>
    <div class="line-box">
      <div class="line"></div>
    </div>
  
</div>
  </label>
   <label>
    <p class="label-txt">Upload Image</p>
    <input type="file" name="image">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <button type="submit" name="Submit">submit</button>
</form>