<style>
  #setmar{
    margin: 0px !important;
    padding:0px !important;
  }
</style>
<link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
<!-- // -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://mxcdn.bootstrap.com/bootstrap/4.0.0/css/bootstrap.min.css">

<?php
$arr;
$connect=mysqli_connect("localhost","root","","harry");
if($connect){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'><strong>Connection Successful !</strong> You are now Connected with Database.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
}
else{
    die("<div class='alert alert-warning alert-dismissible fade show' role='alert'><strong>Unfortunately !!</strong> You are Disconnected.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
}
$data=mysqli_query($connect,"SELECT * FROM notes");

// SUBMITTING DATA TO SERVER

if($_SERVER['REQUEST_METHOD']=="POST"){
    if($_POST['n_id']){
      extract($_POST);
      $connect=mysqli_connect("localhost","root","","harry");
      $result=mysqli_query($connect,"UPDATE notes SET n_title='$n_title',n_desc='$n_desc' WHERE notes.n_id=$n_id");
      if($result){
        //  echo "Data Successfully Updated"; 
         header("Location:/hphp/Core/OPERATIONS.php");
      }
      else{
          echo "<script>alert('Cannot Update Data')</script>";
      }
    }
    else{

      $title=$_POST['n_title'];
      // if(strlen($title)<5){
      //   echo "<script>console.log('Title is too Short')</script>";
      //   header("Location:/hphp/Core/OPERATIONS.php");
      // }
      $desc=$_POST['n_desc'];
      $save=mysqli_query($connect,"INSERT INTO notes (n_title,n_desc) VALUES ('$title','$desc')");
      if($save){
          // echo "<script> console.log(The record has been submitted successfully)</script>";
          header("Location:/hphp/Core/OPERATIONS.php");
        }
        else{
          // echo "<script>alert('Cannot Submit')</script>";
          header("Location:/hphp/Core/OPERATIONS.php");
      }
    }
}
$id=false;
extract($_GET);
if($id!=null){
  $delete=mysqli_query($connect,"DELETE FROM notes WHERE n_id='$id' ");
  // echo "<script>alert('Deleted Successfully')</script>";
  header("Location:/hphp/Core/OPERATIONS.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD</title>
</head>
<body>

<div class="container-fluid">


    <!-- <nav id="setmar" class="navbar navbar-expand-lg navbar-dark bg-dark mt-0 p-0 w-100">
      <a class="navbar-brand" href="">iNotes</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
              
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav> -->
    <div class="container mt-5 mb-5">
        <h3 class="font-weight-bolder text-center text-uppercase text-success" style="font-size:35px;">Add a Note</h3>
        <form action="OPERATIONS.php" method="post">
            <div class="form-group">
                <label for="note_title">Note Title</label>
                <input type="text" class="form-control" name="n_title" id="n_title" aria-describedby="emailHelp" placeholder="Enter Title" required>
                <small id="emailHelp" class="form-text text-muted">Your Notes are safe WIth Us.</small>
            </div>
            <div class="form-group">
                <label for="note_desc">Description</label>
                <textarea required class="form-control" id="n_desc" name="n_desc" placeholder="Description"></textarea>
            </div>
            <!-- <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="container mt-5">
        <table class="table border" id="myTable" >
            <thead class="thead-dark">
              <tr>
                <th scope="col">SN</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>

            <tbody>
                <?php 
                    // $sin=0;
                    // while($res=mysqli_fetch_assoc($data)){
                      foreach($data as $key => $res)
                      {
                        $str = str_replace('"',"",$res['n_desc']);
                      ?>
                        <tr>
                            <th scope='row'><?=$key+1?></th>
                            <td><?=$res['n_title'];?></td>
                            <td><?=$res['n_desc']?></td>
                            <td id="<?php $res['n_id'] ?>">
                            
                            <button onclick="openModel('<?=$res['n_id']?>',`<?=$res['n_title'];?>`,`<?=$str?>`)" id="bbb"  class="btn btn-primary">Edit</button>
                            <!-- <button onclick="<?php //$arr[$key]=$res['n_id']?>" id="bbb"  class="btn btn-primary" data-toggle="modal" data-target="#edit">Edit</button> -->
                            
                            <a class="text-danger font-weight-bolder" href="OPERATIONS.php?id=<?= $res['n_id'] ?>" onclick="return confirm('Are U Suar ?')">Delete</a></td>
                        </tr>
                      <?php
                    }
                ?>
            </tbody>
        </table>

    </div><br><br>
    <div class="container">
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="editmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header "  >
        <h1 class="modal-title" style="margin-left:25%"  id="exampleModalLongTitle">Edit a Note</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <h3>Fill Details  </h3> -->
        
        <form action="" method="post">
            <div class="form-group " hidden >
                <label for="note_title">Note ID</label>
                <input type="text" class="form-control" value="" name="n_id" id="n_id_id">
            </div>
            <div class="form-group">
                <label for="note_title">Note Title</label>
                <input type="text" class="form-control" name="n_title" id="n_title_id" aria-describedby="emailHelp" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="note_desc">Description</label>
                <textarea class="form-control"  name="n_desc" id="n_desc_id"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="w-100 btn btn-success">Submit</button>
          </div>
        </form>
    </div>
  </div>
</div>
    </div>
  </div>
<script>
    function openModel(id,title,desc)
    {
      $("#n_id_id").val(id);
      $("#n_title_id").val(title);
      $("#n_desc_id").val(desc);
      $("#editmodel").modal('show');
    }
</script>
  
<script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script>let table = new DataTable('#myTable');</script>
</body>
</html>