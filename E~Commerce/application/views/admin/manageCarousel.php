<h1 class="text-center font-weight-bold text-uppercase">Add Carousel</h1>
<div class="container">
    <form action="<?= base_url('admin/') ?>saveCarousel" method="post" enctype="multipart/form-data">
        <div class="row mt-4">
            <div class="col-md-8">
                <label for="carousel">Select an Image</label>
                <input type="file" name="carousel" required class="form-control mt-1">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary mt-4 w-75">Save</button>
            </div>
        </div>
    </form>
    <div class="row my-5">
        <div class="col-md-12">
            <table class="table table-stripped table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>SN</th>
                        <th>Carousel</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($carousel as $key => $row) {
                        ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td>
                                <center><img src="<?= base_url() ?>uploads/<?= $row['c_name'] ?>"
                                        style="width:100px !important;height:100px;border-radius:0px" alt=""></center>
                            </td>
                            <td>
                                <a onclick="return confirm('Wanna Update?')"
                                    href="<?= base_url('admin/editCarousel/') . $row['c_id'] ?>">
                                    <button type="button" class="btn btn-sm btn-primary">Edit</button>
                                </a>
                                <a onclick="return confirm('Are you Sure?')"
                                    href="<?= base_url('admin/deleteCarousel/').$row['c_id'] ?>">
                                    <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                </a>
                            </td>
                        </tr>

                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>