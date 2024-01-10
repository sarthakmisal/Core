<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<div style=" margin-left: 400px;margin-top:200px; width:50%;height:500px;" class="bg-light" >
    <center>
    <h3 class="text-success">Enter Your Details </h3>
    <form action="inserting_db.php" method="post" class="form">
        Name  <input class="form-control" type="text" name="t_name" id="t_name"><br><br>
        Phone  <input class="form-control" type="number" name="t_phone" id="t_phone"><br><br>
        Address  <textarea class="form-control" name="t_add" id="t_add"></textarea><br><br>
        <button class="btn btn-outline-success">Submit</button>
    </form>
</div>



<!-- <?php

//if(isset($_POST['name'])){
//?><br><br>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
//<?php

//}
//?> -->