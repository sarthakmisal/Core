<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="container">
    <div class='row ' >
        <!-- <div class="col-4"></div> -->
        <div class="col-6 mt-5 ml-5" style="margin-left:280px !important" >
            <h3 class="text-center font-weight-bolder text-success">Fill Your Details </h3>
            <form action="sign_up.php" method="POST">
                <div class="form-group">
                  <label for="u_name">Name</label>
                  <input type="text" class="form-control" name="u_name" id="u_name" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="u_user">Username</label>
                  <input type="text" maxlength="15" class="form-control" name="u_user" id="u_user" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="u_pass1">Password</label>
                  <input type="password" class="form-control" value="77" name="u_pass1" id="u_pass1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="u_pass2">Re-Enter Password</label>
                  <input type="password" class="form-control" name="u_pass2" id="u_pass2" placeholder="Password" onkeydown="pass()" onblur="pass1()" required>
                  <small id="passHelp" class="form-text text-muted">Both passwords must be same.</small>
                </div>
                <div class='text-center'>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div><br>
                <div class="card-footer text-muted text-center">
                  Already have an account? <a href="http://localhost/hphp/Login_System/log_in.php">Log In</a>
                </div>
            </form>
        </div>
        <!-- <div class="col-4/"></div> -->
    </div>
</div>
<script>
    
    function pass(){
        var a=document.getElementById('u_pass1').value
        var b=document.getElementById('u_pass2').value
        if(a==b){
            document.getElementById('u_pass2').classList.remove('border-danger')
            document.getElementById('u_pass2').classList.add('border-success')
            document.getElementById('u_pass2').classList.remove("text-danger")
            document.getElementById('u_pass2').classList.add("text-success")
            document.getElementById('passHelp').innerText("Both are Same")
            document.getElementById('passHelp').setAttribute("style","color:green !important;")
        }
        else{
            document.getElementById('u_pass2').classList.add('border')
            document.getElementById('u_pass2').classList.add('border-danger')
            document.getElementById('u_pass2').setAttribute("style","box-shadow:0px 0px 1px 1px red")
            document.getElementById('passHelp').setAttribute("style","color:red !important;")
        }
        // alert(a)
    }
    function pass1(){
        var a=document.getElementById('u_pass1').value
        var b=document.getElementById('u_pass2').value
        if(!(a==b)){
            document.getElementById('u_pass2').value=null
            document.getElementById('passHelp').classList.add("text-danger")
        }

    }
</script>

<?php 
include("partials/_db_connect.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
    extract($_POST);
    // print_r($_POST);
    $hash=password_hash($u_pass2,PASSWORD_DEFAULT);
    $verify=mysqli_query($connect,"SELECT * FROM r_users");
    $flag=true;
    foreach($verify as $key=> $row){
        if($u_user==$row['u_user']){
            $flag=false;
        }
    }
    if($flag){
        $response=mysqli_query($connect,"INSERT INTO r_users(u_name,u_user,u_pass1) VALUES ('$u_name','$u_user','$hash')");
        echo "<script> alert('Data inserted Successfully Log in Now'); window.location.href='http://localhost/hphp/Login_System/log_in.php' </script>";
    }
    else{
        echo "<script> alert('Duplicate Username Found'); window.location.href='http://localhost/hphp/Login_System/sign_up.php' </script>";

    }
}
?>

