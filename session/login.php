<?php
session_start();
if(isset($_SESSION['name'])){

    echo "You r Logged in now";
    echo "<br>My name is ".$_SESSION['name']."<br><br>";
    echo "My Number is ".$_SESSION['mobile']."<br><br>";
}
else{
    echo "kindly log in";
    // print_r($_SESSION);
}
?>