<script>
    fetchCategory(<?= $product[0]['cat_id'] ?>);
</script>
<h1 class="text-center font-weight-bold text-uppercase">Edit Product</h1>
<div class="container">
    <form action="<?= base_url() . 'admin/updateProduct?id=' . $product[0]['p_id'] ?>" method="post"
        enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3">
                <label for="cat_id">Select Category</label>
                <select required onchange="fetchCategory(this.value)" name="cat_id" class="form-control p-3">
                    <option selected disabled>tap to select</option>
                    <?php
                    foreach ($category as $row) {
                        ?>
                        <option <?= $row['cat_id'] == $product[0]['cat_id'] ? "selected" : "" ?> value="<?= $row['cat_id'] ?>">
                            <?= $row['cat_name'] ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-3">
                <label for="cat_id">Select Sub Category</label>
                <select required name="sub_cat_id" id="sub_cat" class="form-control p-3">
                    <option selected disabled value="">Select Category first</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="p_name">Product Name</label>
                <input value="<?= $product[0]['p_name'] ?>" required type="text" name="p_name" class="form-control">
                <input value="<?= $product[0]['p_images'] ?>" hidden type="text" name="p_images" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="p_price">Price</label>
                <input value="<?= $product[0]['p_price'] ?>" required type="text" name="p_price" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="p_images">Product Images</label>
                <input value="<?= $product[0]['p_images'] ?>" type="file" accept="image/*" multiple name="p_images[]"
                    class="form-control">
            </div>
            <div class="col-md-6">
                <label for="p_label">Product Label</label>
                <select required name="p_label" class="form-control p-3">
                    <option selected><?= $product[0]['p_label'] ?></option>
                    <option>No Label</option>
                    <option>Featured</option>
                    <option>Trending</option>
                    <option>Upto 10% OFF</option>
                    <option>Upto 20% OFF</option>
                    <option>Upto 30% OFF</option>
                    <option>Upto 40% OFF</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="p_desc">Product Details</label>
                <textarea name="p_desc" class="form-control"><?= $product[0]['p_desc'] ?></textarea>
            </div>
            <div class="col-md-6 "></div>
            <div class="col-md-6 my-4 " style="text-align: right;">
                <button class="btn btn-lg btn-primary" type="submit">Save Product</button>
            </div>
        </div>
    </form>
</div>
<script>
    fetchCategory = (val) => {
        fetch("<?= base_url('admin/fetchCategory/') ?>" + val).then(res => {
            if (!res.ok) throw new Error("Cannot Fetch!!")
            return res.json()
        }).then(data => {
            row = ``
            for (i = 0; i < data.length; i++) {
                row += `<option value="${data[i]['sub_cat_id']}">${data[i]['sub_cat_name']}</option>`
            }
            sub_cat.innerHTML = row
        })
    }
</script>

<div class="container">
    <center>
        <div class="row">
            <!-- <div class="col-md-12"> -->

            <?php
            $data = explode("&&", $product[0]['p_images']);
            for ($i = 0; $i < count($data); $i++) {
                ?>
                <div class="my-3 col-md-3">
                    <img src="<?= base_url() ?>uploads/<?= $data[$i] ?>" width="100px" alt="">
                </div>
                <?php
            } ?>
            <!-- </div> -->
        </div>
    </center>
</div>