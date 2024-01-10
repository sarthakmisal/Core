<a href="trial.php?id=44"><button>click</button></a>
<?php
if(isset($_GET['id'])){
    $_SESSION['uuu']=$_GET['id'];
}
echo $_SESSION['uuu'];
?>