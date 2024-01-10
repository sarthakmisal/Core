<?php
$userName="root";
$serverName="localhost";
$pass="";
$connect=mysqli_connect($serverName,$userName,$pass);
if(!$connect){
    die("<br><br>Sorry Failed to connect to server ERROR => ".mysqli_connect_error());
}
else{
    echo "<br><br>Successfully Connected to Database";
} 


$qq="CREATE DATABASE shetty";
$ins=mysqli_query($connect,$qq);

if($ins){
    echo "Database Created Successfully ";
}
else{
    echo "<br><br>Not created due to ". mysqli_error($connect);
} 
?>