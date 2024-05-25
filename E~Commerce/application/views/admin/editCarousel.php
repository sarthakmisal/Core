
<h1 class="text-center font-weight-bold text-uppercase">Edit Carousel</h1>
<div class="container">
    <form action="<?= base_url('admin/updateCarousel/').$carousel[0]['c_id']?>" method="post" enctype="multipart/form-data">
        <div class="row mt-4">
            <div class="col-md-8">
                <label for="carousel">Select an Image</label>
                <input type="file" name="carousel" required class="form-control mt-1">
                <input type="text" name="old" hidden value="<?= $carousel[0]['c_name'] ?>" class="form-control mt-1">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary mt-4 w-75">Save</button>
            </div>
        </div>
    </form>
    <div class="row mt-5">
        <center>
        <div class="col-md-12 mt-5">
                <img src="<?=base_url()?>uploads/<?= $carousel[0]['c_name'] ?>" width="200px" alt="">
            </div>
        </center>
    </div>
</div>