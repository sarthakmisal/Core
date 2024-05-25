<h1 class="text-center font-weight-bold text-uppercase">Edit Sub Category</h1>
<form action="<?= base_url() ?>admin/update_sub_category?id=<?=$sub_category[0]['sub_cat_id']?>" method="post">
    <div class="container p-5 my-4">
        <div class="row">
            <div class="col-md-6">
                <select name="cat_id" class="form-control p-3">
                    <?php
                    foreach ($category as $key => $row) {
                        ?>
                        <option <?= $row['cat_id']==$sub_category[0]['cat_id']?"selected":"" ?> value="<?= $row['cat_id'] ?>"><?= $row['cat_name'] ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-6">
                <input type="text" value="<?=$sub_category[0]['sub_cat_name']?>" name="sub_cat_name" class="form-control" placeholder="Enter Sub Category Name">
            </div>
            <div class="col-md-6 my-4">
                <input type="text" value="<?=$sub_category[0]['status']?>" name="status" class="form-control" placeholder="Status">
            </div>

            <div class="col-md-6 my-4 text-right">
                <button class="btn w-50 text-right  btn-primary ">Update&nbsp;Sub&nbsp;Category</button>
            </div>
        </div>
    </div>
</form>