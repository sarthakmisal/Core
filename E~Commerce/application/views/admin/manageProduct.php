<h1 class="text-center font-weight-bold text-uppercase mb-4">Manage Products</h1>
<div class="container p-0">
    <div class="row">
        <div class="col-md-12 overflow-scroll">
            <table class="table table-stripped w-100 table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>SN</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Label</th>
                        <th>Description</th>
                        <th>Images</th>
                        <th>Status</th>
                        <th>Date Modified</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($products as $key => $row) {
                        ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $row['p_name'] ?></td>
                            <td><?= $row['p_price'] ?></td>
                            <td><?= $row['p_label'] ?></td>
                            <td style="white-space:normal"><?= $row['p_desc'] ?></td>
                            <td><?php
                            $data = explode("&&", $row['p_images']);
                            for ($i = 0; $i < count($data); $i++) {
                                ?>
                                    <img src="<?= base_url() ?>uploads/<?= $data[$i] ?>" width="100px" alt="">
                                    <?php
                            } ?>
                            </td>
                            <td><?= $row['status'] ?></td>
                            <td><?= $row['entry'] ?></td>
                            <td>
                                <a onclick="return confirm('Wanna Update?')"
                                    href="<?= base_url() ?>admin/editProduct?id=<?= $row['p_id'] ?>">
                                    <button type="button" class="btn btn-sm btn-primary">Edit</button>
                                </a>
                                <a onclick="return confirm('Are you Sure?')"
                                    href="<?= base_url() ?>admin/deleteProduct?id=<?= $row['p_id'] ?>">
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