<?php 
session_start();
require("partials/_db_connect.php");
// print_r($_SESSION);
$i=$_SESSION['username'];
$dat=mysqli_query($connect,"SELECT * FROM r_users WHERE u_user='$i'");
$data=mysqli_fetch_assoc($dat);
if(isset($_SESSION['logged_in'])||$_SESSION['logged_in']==true){
    // echo "<div class='alert alert-success alert-dismissible fade show mb-0' role='alert'><strong>Logged In !</strong><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
}
else{
    echo "<script>alert('You have been logged Out Somehow'); location.href='http://localhost/hphp/Login_System/log_in.php';</script>";

}
?>
    <div class="container-fluid p-0">
        <div class="row">
          <div class="col-12">
              <?php require("partials/_nav.php"); ?>
              <div class="container mt-5">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Welcome <?= $data['u_name']?> !!</h4>
                    <p>Hey there , How are you doing ? Welcome to ISecure... Hello <?= $data['u_name']?> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, laborum. Nulla facere assumenda, dignissimos tempore molestiae quas earum ullam incidunt explicabo quibusdam fugiat. Laboriosam officiis iste debitis, ipsa nihil ducimus.</p>
                    <hr><p class="mb-0">Whenever you need to leave, be sure You <a href="partials/_logout.php">Log-Out</p>
                </div>
              </div>
            </div>

        </div>
    </div>
