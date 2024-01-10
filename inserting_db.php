<?php
$server="localhost";
$user="root";
$pass="";
$database="harry";
$conn=mysqli_connect($server,$user,$pass,$database);
if(!$conn){
    die("<br><br>Sorry We're Unable to Connect to server<br><br>");
}
else{
    echo "We're Now Connected with Database <br><br>";
}
// $q="CREATE DATABASE samarth";
// $q="CREATE TABLE trial(t_id INT PRIMARY KEY AUTO_INCREMENT,t_name VARCHAR(199),t_phone VARCHAR(12),t_add VARCHAR(200))";
// $p=mysqli_query($conn,$q);
// var_dump($p);

// CREATING TABLE AND INSERTING VALUES INTO IT 
// extract($_POST);
// $query="INSERT INTO trial(t_name,t_phone,t_add) VALUES ('$t_name','$t_phone','$t_add')";
// $insert=mysqli_query($conn,$query);
// if($insert){
//     echo "Data Inserted Successfully ";
//     echo "<a href='form_bootStrap.php'<button class='btn'>Wanna Submit another Response ?</button></a>";
// }
// else{
//     var_dump(mysqli_error($conn));
// }

//  GETTING DATA FROM DATABASE

// $que="SELECT * FROM trial WHERE 1";
// $fet=mysqli_query($conn,$que);
// $num=mysqli_num_rows($fet);
// if($num>0){
//     echo var_dump(mysqli_fetch_assoc($fet))."<br>";
//     echo var_dump(mysqli_fetch_assoc($fet))."<br>";
//     echo var_dump(mysqli_fetch_assoc($fet))."<br>";
//     echo var_dump(mysqli_fetch_assoc($fet))."<br>";
//     echo var_dump(mysqli_fetch_assoc($fet))."<br>";
//     echo var_dump(mysqli_fetch_assoc($fet))."<br>";
//     echo var_dump(mysqli_fetch_assoc($fet))."<br>";
//     echo var_dump(mysqli_fetch_assoc($fet))."<br>";
// }
// echo $row;
// while($row=mysqli_fetch_assoc($fet)){
//     var_dump($row);
//     echo "<br>";
// }


// WE'RE DELETING DATA
// $delq="DELETE FROM trial WHERE t_name='Yash' LIMIT 2";
// // $delq="DELETE FROM `trial` WHERE `trial`.`t_id` = 4";
// $delta=mysqli_query($conn,$delq);

// if($delta){
//     echo "No of rows affected are ".mysqli_affected_rows($conn)." <br>";
// }
// else{
//     echo "Cannot Deleted Data <br>";
// }
// var_dump($delta);


// WE'RE UPDATING DATA IN DATABASE

$uq="UPDATE trial SET t_name='Neon Man' WHERE t_id=3";
$updt=mysqli_query($conn,$uq);
if($updt){
    echo "No of rows affected are ".mysqli_affected_rows($conn)." <br>";
}
else{
    echo "Cannot Deleted Data <br>";
}
var_dump($updt);

?>
