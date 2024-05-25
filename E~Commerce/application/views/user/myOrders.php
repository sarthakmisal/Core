<?php
// echo "<pre>";
// print_r($orders);exit;
?>
<style>
    .goldenrod {
        color: #D5A021;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 shadow pl-4 pr-5 py-5">
            <div class="row pr-5">
                <div class="col-md-12">
                    <h1 class="font-weight-bold">My Orders</h1>
                </div>
                <?php
                foreach ($orders as $key => $row):
                    $color = $row['order_status'] != 'Pending' ? ($row['order_status'] == 'Rejected') ? 'text-danger' : 'text-success' : 'goldenrod';
                    $color=$row['order_status']=='Unable to Deliver'?'text-danger':$color;
                    ?>
                    <a style="text-decoration:none;color:black;display:flex;"
                        href="<?= base_url('user/openInvoice/') . $row['order_id'] ?>">
                        <div class="col-md-10 mt-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="h5"><?= $row['order_date'] ?></p>
                                </div>
                                <div class="col-md-12">
                                    <p><?= $row['deliver_to'] . ",&nbsp;" . $row['area'] . ",&nbsp;" . $row['city'] . ",&nbsp;" . $row['district'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mt-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="font-weight-bold">
                                        &#8377;&nbsp;<?= number_format($row['amount_payable']) ?>&nbsp;/-</h4>
                                </div>
                                <div class="col-md-12 ">
                                    <p style="font-size:18px;" class="mx-2 <?= $color ?>">
                                        <?= $row['order_status']!='Unable to Deliver'? "Order&nbsp;".$row['order_status']."&nbsp;":"Can't&nbsp;Deliver" ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php
                endforeach;
                ?>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>