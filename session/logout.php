<!-- logout -->
<?php
session_start();
session_unset();
session_destroy();
echo "You've been Logged Out";
?>