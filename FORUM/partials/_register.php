<?php
include "_dbConnect.php";
echo $_SERVER['REQUEST_METHOD'];
if(isset($_POST['u_name'])){
    print_r($_POST);
    extract($_POST);
    if(0 < (mysqli_num_rows(mysqli_query($connect,"SELECT * FROM users WHERE u_username='$u_username'")))){
        echo "<script>alert('Username Already Exists');location.href='http://localhost/hphp/FORUM/index.php'</script>";
    }
    else{
        $hash=password_hash($u_pass2,PASSWORD_DEFAULT);
        mysqli_query($connect,"INSERT INTO users(u_name,u_username,u_pass,u_time)VALUES('$u_name','$u_username','$hash',current_timestamp())");
        echo "<script>alert('Registered LogIn Now');location.href='http://localhost/hphp/FORUM/index.php'</script>";
    }
    
    
}
if(isset($_POST['u_pass'])){
    extract($_POST);
    $dk=mysqli_query($connect,"SELECT * FROM users WHERE u_username='$u_username'");
    $ddx=mysqli_fetch_assoc($dk);
    // $rows=;
    // print_r($ddx);
    if(0 < mysqli_num_rows($dk)){
        $flag=password_verify($u_pass,$ddx['u_pass']);
        // $_SESSION['time']=$ddx['u_time'];
        // echo "<script>alert('succed')</script>";
        // echo "this ".$flag." is flag";
        if($flag){
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['name']=$ddx['u_name'];
            $_SESSION['username']=$ddx['u_username'];
            $_SESSION['user_id']=$ddx['u_id'];
            echo "<script>alert('Log In SUuccessfull');location.assign('http://localhost/hphp/FORUM/index.php')</script>"; 
        }else{
            echo "<script>alert('wrong Password');location.assign('http://localhost/hphp/FORUM/index.php')</script>"; 
        }
    }
    else{
        echo "<script>alert('User Not exist Kindly SIgnUP');location.href='http://localhost/hphp/FORUM/index.php';</script>"; 
    }
}else{
    echo "<script>alert('SOemthong wont rong');</script>";
    
}

if(isset($_GET['out'])){
    session_start();
    session_unset();
    session_destroy();
    header("location:http://localhost/hphp/FORUM/index.php");
}
print_r($_POST);
?>