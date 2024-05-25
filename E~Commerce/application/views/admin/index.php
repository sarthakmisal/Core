<?php
require ("partials/navbar.php");
?>
<div class="container">
    <div class="row ">
        <div class="col-md-12 d-flex justify-content-center ">
            <a href="<?= base_url('admin/adminLogout') ?>">
                <button class="btn btn-primary btn-lg">LogOut</button>
            </a>
        </div>
    </div>
</div>
<?php
include ("partials/footer.php");
?>