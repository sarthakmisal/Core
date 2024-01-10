<?php
// session_start();
?>
<nav id="setmar" class="navbar navbar-expand-lg navbar-dark bg-dark ">
<a class="navbar-brand" href="#">iNotes</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/hphp/Login_System/welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <?php
          if(!isset($_SESSION['username'])){
         ?>

      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/hphp/Login_System/sign_up.php">Sign Up</a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/hphp/Login_System/log_in.php">Log In</a>
      </li>
      <?php
          }
          else{
            ?>
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/hphp/Login_System/sign_up.php">Add New User</a>
      </li>
      <?php
          }
          ?>
      <!-- <li class="nav-item active">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <?php
          if(isset($_SESSION['username'])){
         ?>
      <a href="partials/_logout.php"> <button class="btn btn-outline-success my-2 my-sm-0" type="button">Log Out</button></a>
      <?php
          }
          ?>
    </form>
  </div>
</nav>  

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">