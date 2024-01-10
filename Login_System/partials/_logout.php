<?php
session_start();
session_unset();
session_destroy();

echo "<script>alert('You have been logged Out');</script>";
require "_nav.php";
?>