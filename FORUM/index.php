<?php
include "partials/_header.php";
include "partials/_dbConnect.php";
$card=mysqli_query($connect,"SELECT * FROM catagory");
?>
<div class="container"><br><br>
    <h3 class="text-center mx-3">Let's Discuss Catagories</h3><br>
    <div class="row">
        <?php
        // foreach($card as $key=>$row){
            while($row= mysqli_fetch_assoc($card)){
            ?>
                <div class="card col-12 col-md-4" style="width: 18rem;">
                    <img class="card-img-top" src="https://source.unsplash.com/500x400/?coding,<?= $row['c_name']?>" alt="<?= $row['c_name']?> ">
                    <div class="card-body" style="overflow:hidden">
                        <h5 class="card-title text-primary "><?=$row['c_name']?></h5>
                        <p class="card-text "><?=substr($row['c_description'],0,200)?>....</p>
                        <a href="partials/_threadList.php?id=<?=$row['c_id']?>&tii" class="btn btn-primary">View Threads</a>
                    </div>
                </div>
            <?php
        }
        ?>
    </div>
</div>
<?php
include "partials/_footer.php";
?>
