<?php
// print_r($_POST);
// session_start();
// print_r($_SERVER['REQUEST_METHOD']);
include "_header.php";
include "_dbConnect.php";
$id=$_GET['id'];
$dat=mysqli_query($connect,"SELECT * FROM catagory WHERE c_id='$id'");
$at=mysqli_query($connect,"SELECT * FROM threads WHERE t_cat_id='$id'");
$data=mysqli_fetch_assoc($dat);
$ata=mysqli_fetch_assoc($at);
?>

<div class="container-fluid">
    <div class="container ">
        <div class="jumbotron  my-5">
            <h1 class="display-4">Welcome To, <?= $data['c_name']?> Forum !</h1>
            <p class="lead"><?=$data['c_description']?>.</p>
            <hr class="my-4">
        </div>

        <!-- Button trigger modal -->
        <?php
        if(isset($_GET['tii']) && isset($_SESSION['loggedin'])){
            ?>
        <center><a href="_threadList.php?id=<?=$id?>&t_id=lucifer"><button type="button"
                    class="btn btn-success mb-5 btn-lg">Ask Your Question</button></a></center>
        <?php
        }
        ?>
        <?php
        if(isset($_GET['t_id'])&& isset($_SESSION['loggedin'])){
            ?>
        <h5 class="text-center text-uppercase font-weight-bolder text-success mb-4">You'll be Answered Shortly</h5>
        <form action="_threadList.php?id=<?=$id?>&tii" method="post">
            <div class="form-group">
                <label for="email">Question Title</label>
                <input type="text" required class="form-control" name="t_title" id="t_title"
                    placeholder="Write Question Here">
                    <input type="text" name="t_cat_id" value="<?= $id ?>" hidden required>
                    <input type="text" name="t_user_id" value="<?= $_SESSION['user_id'] ?>" hidden required>
                <!-- <script>
                // function date() {
                //     // alert(new Date().toISOString().slice(0, 19).replace('T',' '));
                //     document.getElementsByName('t_time')[0].value = new Date().toISOString().slice(0, 19).replace('T',
                //         ' ');
                // }
                // </script> -->
            </div>
            <div class="form-group">
                <label for="password">Description</label>
                <textarea rows="5" required type="password" class="form-control" name="t_description" id="t_description"
                    placeholder="Elaborate Your Problem"></textarea>
            </div>
            <center><button type="submit" class="btn  mt-2 btn-success ">POST</button></center>
        </form>
        <?php
        }
            ?>
        <?php
            // $ddd=$_SESSION[`username`];
            // $username=mysqli_query($connect,"SELECT u_username FROM users WHERE u_username='$ddd'");
        if(isset($ata)){
            if(!isset($_SESSION['loggedin'])){
                ?>
                <i><h5 class="text-center text-muted">You're Not Logged In   to POST your Questions OR Comments Kindly Log in </h5><br></i>
                <?php
            }
            ?>
        <h2>Browse Questions</h2>
        <?php
            foreach($at as $key =>$row){
                $ii=$row['t_user_id'];
                $c_user=mysqli_fetch_assoc(mysqli_query($connect,"SELECT u_username FROM users WHERE u_id=$ii"));
        ?>
        <div class="media my-4">
            <img class="mr-3" style="border-radius: 50%;" width="35px" src="../uploads/userra.png"
                alt="Generic placeholder image">
            <div class="media-body row">
                <p class="col-md-3 text-primary font-weight-bolder" style="margin-bottom:5px; font-size:20px;">@<?=$c_user['u_username']?> </p><p class="col-md-3 text-muted font-weight-bolder" style="font-size:13px;margin:5px -175px;margin-bottom:0px;"><b class=" mx-3" style="font-size:14px"> at</b><?=$row['t_time']?>
                    </p>
                <p id="rrr" class="col-md-12  text-danger"><a href="_thread.php?id=<?=$row['t_id']?>"><?= $row['t_title']?>   </a></p>
                <p class="mx-4" style="margin-top :-10px;">
                <?= $row['t_description']?>.</p>
            </div>
        </div>

        <?php
        }
    }else{
    ?>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">No Questions Posted Yet</h1>
                <p class="lead">Be the First One to Post a Question Here</p>
            </div>
        </div>
        <?php
    }
        ?>
    </div>
</div>
<?php
include "_footer.php";
// isset($_POST['$t_title']){

    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['t_title'])){
        include "_dbConnect.php";
        extract($_POST);
        print_r($_POST);
        // if(isset($_SERVER['REQUEST_METHOD'])){}
        $t_tit=strip_tags(addslashes($t_title));
        $t_des=strip_tags(addslashes($t_description));
        $dl=mysqli_query($connect,"INSERT INTO threads(t_title,t_description,t_cat_id,t_user_id,t_time)VALUES('$t_tit','$t_des','$t_cat_id','$t_user_id',current_timestamp())");
        // header("location:_threadList.php");
        $_POST=null;
        print_r($_POST);
        echo "<script>location.assign('_threadList.php?id=$id&tii')</script>";
    }
// }
?>