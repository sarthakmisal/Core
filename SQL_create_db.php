<pre>
<?php
extract($_POST);
if(isset($_POST['u_name'])){
    echo "<br>Username is ". $u_name." <br> Password is ".$u_mail;
}
else{
    echo "Please Insert Data ";
    ?>
<br>
<form action="SQL_create_db.php" method="post">
    Name : <input type="text" name="u_name"><br><br>
    Email : <input type="email" name="u_mail"><br><br>
    <button>Submit</button>
</form>
<?php
}
?>