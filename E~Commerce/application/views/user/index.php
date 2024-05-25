<div class="container-fluid p-0">
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <?php
                    foreach ($carousel as $key => $row) {
                        ?>
                        <div class="carousel-item <?= $key == 0 ? 'active' : '' ?>" data-bs-interval="10000">
                            <img src="<?= base_url('uploads/') . $row['c_name'] ?>" width="100%" height="800vh"
                                class="d-block w-100" alt="..">
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">

        <div class="col-md-12 text-center my-5 ">
            <h1 class="font-weight-bold">Trending Products</h1>
        </div>
        <?php
        foreach ($trendingProducts as $key => $row):
            ?>
            <div class="col-md-4">
                <a class="text-dark text-decoration-none" href="<?= base_url('user/viewProduct/' . $row['p_id']) ?>">
                    <div class="card overflow-hidden">
                        <div class="card-header"
                            style="overflow:hidden;height:250px;background-image: url('uploads/<?php echo explode('&&', $row['p_images'])[0]; ?>');background-repeat:no-repeat;background-size:100% 100%;">
                            <!-- <div class="" style="height:250px;overflow:hidden"> -->
                            <!-- </div> -->
                        </div>
                        <div class="card-body text-left" style="line-height:5px">
                            <h6 class="font-weight-bolder"><?= $row['p_name'] ?></h6>
                            <h6 class="font-weight-bolder" style="font-size:22px">&#8377;&nbsp;<?=  number_format($row['p_price']) ?>
                                <h6 />
                        </div>
                    </div>
                </a>
            </div>
            <?php
        endforeach;
        ?>
    </div>
</div>
<div class="container">
    <div class="row">

        <div class="col-md-12 text-center my-5 ">
            <h1 class="font-weight-bold">Featured Products</h1>
        </div>
        <?php
        foreach ($featuredProducts as $key => $row):
            ?>
            <div class="col-md-4">
                <a class="text-dark text-decoration-none" href="<?= base_url('user/viewProduct/' . $row['p_id']) ?>">
                    <div class="card overflow-hidden">
                        <div class="card-header"
                            style="overflow:hidden;height:250px;background-image: url('uploads/<?php echo explode('&&', $row['p_images'])[0]; ?>');background-repeat:no-repeat;background-size:100% 100%;">
                            <!-- <div class="" style="height:250px;overflow:hidden"> -->
                            <!-- </div> -->
                        </div>
                        <div class="card-body text-left" style="line-height:5px">
                            <h6 class="font-weight-bolder"><?= $row['p_name'] ?></h6>
                            <h6 class="font-weight-bolder" style="font-size:22px">&#8377;&nbsp;<?=  number_format($row['p_price']) ?>
                                <h6 />
                        </div>
                    </div>
                </a>
            </div>
            <?php
        endforeach;
        ?>
    </div>
</div>
<div class="container">
    <div class="row">

        <div class="col-md-12 text-center my-5 ">
            <h1 class="font-weight-bold">Recommended Products</h1>
        </div>
        <?php
        foreach ($sale10 as $key => $row):
            ?>
            <div class="col-md-4">
                <a class="text-dark text-decoration-none" href="<?= base_url('user/viewProduct/' . $row['p_id']) ?>">
                    <div class="card overflow-hidden">
                        <div class="card-header"
                            style="overflow:hidden;height:250px;background-image: url('uploads/<?php echo explode('&&', $row['p_images'])[0]; ?>');background-repeat:no-repeat;background-size:100% 100%;">
                            <!-- <div class="" style="height:250px;overflow:hidden"> -->
                            <!-- </div> -->
                        </div>
                        <div class="card-body text-left" style="line-height:5px">
                            <h6 class="font-weight-bolder"><?= $row['p_name'] ?></h6>
                            <h6 class="font-weight-bolder" style="font-size:22px">&#8377;&nbsp;<?=  number_format($row['p_price']) ?>
                                <h6 />
                        </div>
                    </div>
                </a>
            </div>
            <?php
        endforeach;
        ?>
        <?php
        foreach ($sale20 as $key => $row):
            ?>
            <div class="col-md-4">
                <a class="text-dark text-decoration-none" href="<?= base_url('user/viewProduct/' . $row['p_id']) ?>">
                    <div class="card overflow-hidden">
                        <div class="card-header"
                            style="overflow:hidden;height:250px;background-image: url('uploads/<?php echo explode('&&', $row['p_images'])[0]; ?>');background-repeat:no-repeat;background-size:100% 100%;">
                            <!-- <div class="" style="height:250px;overflow:hidden"> -->
                            <!-- </div> -->
                        </div>
                        <div class="card-body text-left" style="line-height:5px">
                            <h6 class="font-weight-bolder"><?= $row['p_name'] ?></h6>
                            <h6 class="font-weight-bolder" style="font-size:22px">&#8377;&nbsp;<?=  number_format($row['p_price']) ?>
                                <h6 />
                        </div>
                    </div>
                </a>
            </div>
            <?php
        endforeach;
        ?>
        <?php
        foreach ($sale30 as $key => $row):
            ?>
            <div class="col-md-4">
                <a class="text-dark text-decoration-none" href="<?= base_url('user/viewProduct/' . $row['p_id']) ?>">
                    <div class="card overflow-hidden">
                        <div class="card-header"
                            style="overflow:hidden;height:250px;background-image: url('uploads/<?php echo explode('&&', $row['p_images'])[0]; ?>');background-repeat:no-repeat;background-size:100% 100%;">
                            <!-- <div class="" style="height:250px;overflow:hidden"> -->
                            <!-- </div> -->
                        </div>
                        <div class="card-body text-left" style="line-height:5px">
                            <h6 class="font-weight-bolder"><?= $row['p_name'] ?></h6>
                            <h6 class="font-weight-bolder" style="font-size:22px">&#8377;&nbsp;<?=  number_format($row['p_price']) ?>
                                <h6 />
                        </div>
                    </div>
                </a>
            </div>
            <?php
        endforeach;
        ?>
        <?php
        foreach ($sale40 as $key => $row):
            ?>
            <div class="col-md-4">
                <a class="text-dark text-decoration-none" href="<?= base_url('user/viewProduct/' . $row['p_id']) ?>">
                    <div class="card overflow-hidden">
                        <div class="card-header"
                            style="overflow:hidden;height:250px;background-image: url('uploads/<?php echo explode('&&', $row['p_images'])[0]; ?>');background-repeat:no-repeat;background-size:100% 100%;">
                            <!-- <div class="" style="height:250px;overflow:hidden"> -->
                            <!-- </div> -->
                        </div>
                        <div class="card-body text-left" style="line-height:5px">
                            <h6 class="font-weight-bolder"><?= $row['p_name'] ?></h6>
                            <h6 class="font-weight-bolder" style="font-size:22px">&#8377;&nbsp;<?=  number_format($row['p_price']) ?>
                                <h6 />
                        </div>
                    </div>
                </a>
            </div>
            <?php
        endforeach;
        ?>
    </div>
</div>