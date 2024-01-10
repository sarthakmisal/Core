<?php
include "_header.php";
include "_dbConnect.php";
if(isset($_GET['search'])){
    // SELECT * FROM threads WHERE MATCH(t_title,t_description) AGAINST ('object');
    $search=$_GET['search'];
    $data=mysqli_query($connect,"SELECT * FROM threads WHERE t_title LIKE '%$search%' OR t_description LIKE '%$search%'");
    $datac=mysqli_query($connect,"SELECT * FROM comments WHERE cm_content LIKE '%$search%'");
    if(mysqli_fetch_assoc($datac)==null && mysqli_fetch_assoc($data)==null){
        ?>
        <div class="jumbotron mt-5">
            <div class="container">
                <h1 class="display-3">No Records Found</h1>
                <p class="lead mt-3">Suggestions</p>
                <ul class="lead">
                    <li>Make Sure that All words are Spelled Correctly...</li>
                    <li>Try Different Keywords...</li>
                    <li>Enter something relevent to Threads Or Comments</li>
                </ul>
                </div>
                </div>
                <?php
    }else{
        ?>
        <h1 class="font-weight-bolder">Search Results for "<em><?=$_GET['search']?></em>"</h1>
        <?php

    }
    while($row=mysqli_fetch_assoc($data)){
        // if(isset($row['t_title'])&&isset($row['t_description'])){
            ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <a href="http://localhost/hphp/FORUM/partials/_thread.php?id=<?=$row['t_id']?>"><h3 class="text-primary mt-4 mb-0"><?= $row['t_title'] ?></h3></a>
                <?=$row['t_description']?>
            </div>
        </div>
    </div>
    <?php

}
// echo "<hr>";
while($row2=mysqli_fetch_assoc($datac)){
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <a href="http://localhost/hphp/FORUM/partials/_thread.php?id=<?=$row2['cm_t_id']?>"><h4 class="text-primary mt-4 mb-0"><?= $row2['cm_content'] ?></h4></a>
            </div>
        </div>
    </div>
    <?php
}

}
// include "_footer.php";
?>