<?php
$connect=mysqli_connect("localhost","root","","harry");
if($connect){
    echo "<div class='alert alert-success alert-dismissible fade show mb-0' role='alert'><strong>Connection Successful !</strong> You are now Connected with Database.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
}
else{
    die("<div class='alert alert-warning alert-dismissible fade show mb-0' role='alert'><strong>Unfortunately !!</strong> You are Disconnected.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div> ");
}
?>