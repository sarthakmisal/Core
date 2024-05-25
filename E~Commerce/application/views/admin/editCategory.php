<h1 class="text-center font-weight-bold text-uppercase">Update Category</h1>

<form action="<?= base_url() ?>admin/saveUpdate" method="post">
    <div class="container p-5 my-4">
        <div class="row">
            <div class="col-md-6">
                <input type="text" hidden value="<?=$category[0]['cat_id']?>" name="cat_id">
                <input type="text" autofocus name="cat_name" value="<?= $category[0]['cat_name']?>" class="form-control" placeholder="Enter Category Name">
            </div>
            <div class="col-md-6">
                <input type="text"  name="status" value="<?= $category[0]['status']?>" class="form-control" placeholder="Change Status">
                <input type="text" hidden  name="entry" value="<?= date("Y-m-d H:iA",time()) ?>" class="form-control" placeholder="Change Status">
            </div>
            <div class="col-md-2">
                <button class="btn btn-info">Update&nbsp;</button>
            </div>
        </div>
    </div>
</form>