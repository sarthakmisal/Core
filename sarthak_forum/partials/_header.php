<?php
if(!isset($_POST['thread'])){
session_start();
}

include "_dbConnect.php";
?>
<!-- CREATING A NAVBAR FOR ALL THE PAGES -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/about.php">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Top Catagories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
                    $cat_list=mysqli_query($connect,"SELECT c_name,c_id FROM catagory LIMIT 4");
                    while($row=mysqli_fetch_assoc($cat_list)){
                        ?>
                    <a class="dropdown-item" href="/partials/_threadList.php?id=<?=$row['c_id']?>&tii"><?=$row['c_name']?></a>
                    <?php
                    }
                ?>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Contact Us</a>
            </li>
        </ul>
        <form action="/partials/_search.php" method="get" class="form-inline my-2 my-lg-0">
            <input type="text" value="1" name="id" hidden>
            <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search" required minlength="3  ">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <?php
        if(isset($_SESSION['loggedin'])){
            ?>
            <h5 class="text-white mx-3 my-2"> Welcome <?=  $_SESSION['name'] ?></h5>
            <?php
        }
        ?>
            <?php
            if(!isset($_SESSION['loggedin'])){
            ?>
            <button class="btn btn-outline-primary  my-2 mx-2 my-sm-0" type="button" class="btn btn-primary" data-toggle="modal" data-target="#logInModal">LogIn</button>
            <button class="btn btn-outline-primary  my-2 mx-2 my-sm-0" type="button" class="btn btn-primary"
                data-toggle="modal" data-target="#signUpModal">Sign Up</button>
            <?php
            }else{
                ?>
            <a href="/partials/_logOut.php?out"><button class="btn btn-outline-danger  m-2 my-sm-0" type="button">Log Out</button></a>
            <?php
            }
            ?>
    </div>
</nav>



<!-- THIS IS THE CAROUSEL WHICH LOADS IMAGES FROM UNSPLASH.COM -->
<?php
if(!isset($_GET['id'])){
?>
    
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!--<ol class="carousel-indicators">-->
    <!--    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>-->
    <!--    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
    <!--    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
    <!--</ol>-->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://source.unsplash.com/2400x700/?coding,java" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://source.unsplash.com/2400x700/?program,pc" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://source.unsplash.com/2400x700/?website,programmer" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <!--<span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
        <!--<span class="sr-only">Previous</span>-->
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <!--<span class="carousel-control-next-icon" aria-hidden="true"></span>-->
        <!--<span class="sr-only">Next</span>-->
    </a>
</div>

<?php
}
?>
<!-- CDN'S  OF ALL THE NECESSARY BOOTSTRAP AND JQUERY -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>