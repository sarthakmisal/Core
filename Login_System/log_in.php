<?php
    require("partials/_db_connect.php");
    $flag=false;
    echo $_SERVER['REQUEST_METHOD'];
    print_r($_POST);
    print_r($_GET);
if($_SERVER['REQUEST_METHOD']=="POST"){
  // if(isset($_POST['username'])){
      $data=mysqli_query($connect,"SELECT * FROM r_users");
      $username=$_POST['username'];
      foreach($data as $key=>$value){
        if($value['u_user']==$username && password_verify($_POST['userpass'],$value['u_pass1'])){
          $flag=true;
        }
      }
      if($flag){
        session_start();
        $_SESSION["username"]="$username";
        // $_SESSION["password"]="$password";
        $_SESSION["logged_in"]=true;
        echo "<script>location.href='http://localhost/hphp/Login_System/welcome.php'; </script>";
      }
      else{
        echo "<script>alert('Invalid Credentials'); location.href='http://localhost/hphp/Login_System/log_in.php';</script>";
      }
      // print_r($_POST);
  // }

}
?>

  <!-- Add Bootstrap CSS link here -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<html>
    <body style="background-color:rgba(211, 211, 211, 1)">
        <div class="container mt-5 ">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="card shadow mt-5 bg-light">
                <div class="card-header">
                  <h4 class="text-center font-weight-bolder">Login Here</h4>
                </div>
                <div class="card-body bg-light">
                  <form action="log_in.php" method="post">
                    <div class="form-group">
                      <label for="email">Username</label>
                      <input type="text" class="form-control" name="username" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" name="userpass" id="userpass" placeholder="Enter your password">
                    </div>
                    <!-- <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="remember">
                      <label class="form-check-label" for="remember">Remember me</label>
                    </div> -->
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                  </form>
                </div>
                <div class="card-footer text-muted text-center">
                  Don't have an account? <a href="http://localhost/hphp/Login_System/sign_up.php">Sign Up</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Add Bootstrap JS and jQuery links here -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>
