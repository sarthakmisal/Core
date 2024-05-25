<h1 class="text-center font-weight-bold text-uppercase">Add Sub Category</h1>
<form action="<?= base_url() ?>admin/save_sub_category" method="post">
    <div class="container p-5 my-4">
        <div class="row">
            <div class="col-md-5">
                <select name="cat_id" class="form-control p-3">
                    <option selected disabled>Select Category</option>
                    <?php
                    foreach ($category as $key => $row) {
                        ?>
                        <option value="<?= $row['cat_id'] ?>"><?= $row['cat_name'] ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-5">
                <input type="text" name="sub_cat_name" class="form-control" placeholder="Enter Sub Category Name">
            </div>

            <div class="col-md-2">
                <button class="btn btn-primary">Save&nbsp;Sub&nbsp;Category</button>
            </div>
        </div>
    </div>
</form>
<h1 class="text-center font-weight-bold text-uppercase mb-4">Manage Sub Categories</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-stripped  table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>SN</th>
                        <th>Sub Category Name</th>
                        <th>Category Name</th>
                        <th>Status</th>
                        <th>Date Added</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($sub_category as $key => $row) {
                        ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $row['sub_cat_name'] ?></td>
                            <td><?= $row['cat_id'] ?></td>
                            <td><?= $row['status'] ?></td>
                            <td><?= $row['entry'] ?></td>
                            <td>
                                <a onclick="return confirm('Wanna Update?')"
                                    href="<?= base_url() ?>admin/edit_sub_category?id=<?= $row['sub_cat_id'] ?>">
                                    <button class="btn btn-sm btn-primary">Edit</button>
                                </a>
                                <a onclick="return confirm('Are you Sure?')"
                                    href="<?= base_url() ?>admin/delete_sub_category?id=<?= $row['sub_cat_id'] ?>">
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