<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
<h1 class="text-center font-weight-bold text-uppercase">Add Product</h1>
<div class="container">
    <form action="<?= base_url('admin/saveProduct') ?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3">
                <label for="cat_id">Select Category</label>
                <select required onchange="fetchCategory(this)" name="cat_id" class="form-control p-3">
                    <option selected disabled>tap to select</option>
                    <?php
                    foreach ($category as $row) {
                        ?>
                        <option value="<?= $row['cat_id'] ?>"><?= $row['cat_name'] ?></option>
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
                <input required type="text" name="p_name" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="p_price">Price</label>
                <input required type="text" name="p_price" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="p_images">Product Images</label>
                <input required type="file" accept="image/*" multiple name="p_images[]" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="p_label">Product Label</label>
                <select required name="p_label" class="form-control p-3">
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
                <textarea name="p_desc" rows="25" cols="50" id="editor" class="form-control"></textarea>
            </div>
            <div class="col-md-6 "></div>
            <div class="col-md-6 my-4 " style="text-align: right;">
                <button class="btn btn-lg btn-primary" type="submit">Save Product</button>
            </div>
        </div>
    </form>
</div>
<script>
    fetchCategory = (that) => {
        fetch("<?= base_url('admin/fetchCategory/') ?>" + that.value).then(res => {
            if (!res.ok) throw new Error("Cannot Fetch!!")
            return res.json()
        }).then(data => {
            row = ''
            for (i = 0; i < data.length; i++) {
                row += `<option value="${data[i]['sub_cat_id']}">${data[i]['sub_cat_name']}</option>`
            }
            sub_cat.innerHTML = row
        })
    }
</script>
<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>