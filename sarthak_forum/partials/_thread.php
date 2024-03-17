
<?php
// echo "";
// session_start();
include "_header.php";
include "_dbConnect.php";
$id=$_GET['id'];
$dat=mysqli_query($connect,"SELECT * FROM comments WHERE cm_t_id='$id'");
$dalle=mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM threads WHERE t_id='$id'"));
$data=mysqli_num_rows($dat);
$deal=$dalle['t_user_id'];
$que_user=mysqli_fetch_assoc(mysqli_query($connect,"SELECT u_name FROM users WHERE u_id='$deal'"));
// $cm_user_id=mysqli_query($connect,"")
?>

<div class="container-fluid">
    <div class="container">
        <div class="jumbotron mt-5 ">
            <h1 class="display-4"><?= $dalle['t_title']?></h1>
            <p class="lead"><?=$dalle['t_description']?>.</p>
            <!-- <hr class="my-4"> -->
            <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
            <p class="lead">
                Posted By <em><b>~<?=$que_user['u_name']?></b></em>
            </p>
        </div>
        <?php
        if(isset($_SESSION['loggedin'])){
            ?>
            <h2>Start Discussion</h2>
            <div class="container mt-3 mb-4 " style="display:inline-block"><form action="/partials/_thread.php?id=<?=$id?>" method="post">
                <input type="number" name="cm_t_id" value="<?=$id?>" hidden required>
                <input type="text" name="cm_user_id" value="<?=$_SESSION['user_id']?>" hidden required>
                <textarea required name="cm_content" placeholder="Add a Comment"  class="shadow form-control" rows="2">        </textarea><button type="submit" class="float-right btn btn-primary mr-2" style="margin-top: -48px;">POST</button>
            </form></div>
            
            <?php
        }else{
            if(!isset($_SESSION['loggedin'])){
                ?>
                <i><h5 class="text-center text-muted">You're Not Logged In   to POST your Questions OR Comments Kindly Log in </h5><br></i>
                <?php
            }
            ?>
            <h2 class="my-3">Read Discussions</h2>
            <?php
        }
        if($data>0){
            foreach($dat as $key =>$row){
                $ii=$row['cm_user_id'];
                $c_user=mysqli_fetch_assoc(mysqli_query($connect,"SELECT u_username FROM users WHERE u_id=$ii"));
                // var_dump($c_user);
        ?>
        <div class="media">
            <img class="mr-2 mt-2" style="border-radius: 50%;" width="30px" src="../uploads/userra.png" alt="Generic placeholder image">
            <div class="media-body row">
                <p class="col-md-3 text-primary font-weight-bolder d-block" style="margin-bottom:5px; font-size:20px;">@<?=$c_user['u_username']?> </p><p class="col-md-3  text-muted font-weight-bolder" style="font-size:14px;margin:5px -140px;margin-bottom:0px;"><b class=" mx-3" style="font-size:14px"> at</b><?=$row['cm_time']?>
                    </p>
               <p style="font-size:17px; margin-top:-3px;" class="col-md-12 mx-4"><?= $row['cm_content']?>.</p>
            </div>
        </div>
        
        <?php
        }
    }else{
        ?>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">No Comments Yet</h1>
                <p class="lead">Be the First One to Comment</p>
            </div>
        </div>
        <?php
    }
        ?>
    </div>
</div>
<?php
include "_footer.php";
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_SESSION['loggedin'])){
    extract($_POST);
    print_r($_POST);
    $content=strip_tags(addslashes($cm_content));

    mysqli_query($connect,"INSERT INTO comments(cm_content,cm_t_id,cm_user_id,cm_time)VALUES('$content','$cm_t_id','$cm_user_id',current_timestamp())");
    $_POST=null;
    // print_r($_POST);
    echo "<script>location.href='/partials/_thread.php?id=$id'</script>";
}
?>