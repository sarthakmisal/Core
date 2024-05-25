<h1 class="text-center font-weight-bold text-uppercase">Add Category</h1>
<form action="<?= base_url() ?>admin/save_category" method="post">
    <div class="container p-5 my-4">
        <div class="row">
            <div class="col-md-10">
                <input type="text" autofocus name="cat_name" class="form-control" placeholder="Enter Category Name">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary">Save&nbsp;Category</button>
            </div>
        </div>
    </div>
</form>
<h1 class="text-center font-weight-bold text-uppercase mb-4">Manage Categories</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-stripped  table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>SN</th>
                        <th>Category Name</th>
                        <th>Status</th>
                        <th>Date Added</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($category as $key => $row) {
                        ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $row['cat_name'] ?></td>
                            <td><?= $row['status'] ?></td>
                            <td><?= $row['entry'] ?></td>
                            <td>
                                <a onclick="return confirm('Wanna Update?')" href="<?= base_url() ?>admin/edit_category?id=<?= $row['cat_id'] ?>">
                                    <button class="btn btn-sm btn-primary">Edit</button>
                                </a>
                                <a onclick="return confirm('Are you Sure?')" href="<?= base_url() ?>admin/delete_category?id=<?= $row['cat_id'] ?>">
                                    <button class="btn btn-sm btn-danger">Delete</button>
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