<?php
// print_r($details);
?>

<script>
    console.log(document.querySelector("body > div > div").setAttribute("style", "padding:0px"))
</script>
<div class="container mb-5 p-0">
    <div class="row justify-content-center my-5 pb-4">
        <div id="ram" class="col-md-11 bg-white shadow-lg p-5 mt-5">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <tbody>

                            <tr>
                                <td style="border-top:none;">
                                    <h2>To, <?= $details[0]['deliver_to'] ?></h2>
                                    <p style="font-size:0.9rem">
                                        <?= $details[0]['area'] ?>,&nbsp;<?= $details[0]['city'] ?><br>
                                        <?= $details[0]['district'] ?>,&nbsp;<?= $details[0]['state'] ?><br>
                                        <?= $details[0]['pincode'] ?>
                                    </p>
                                </td>
                                <td style="border-top:none;"></td>
                                <td style="border-top:none;"></td>
                                <td style="border-top:none;text-align:right">
                                    <p style="font-size:1rem; font-weight:bold;line-height: 1px;">
                                        Order Date : <?= $details[0]['order_date'] ?><br>
                                    </p>
                                    <p style="font-size:1rem;  font-weight:bold">
                                        Order No : S00M0<?= $details[0]['order_id'] ?>
                                    </p>
                                    <br><br>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <table class="table w-100">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($details as $key => $row):
                                $totalPrice += $row['p_price'] * $row['quantity'];
                                ?>
                                <tr>
                                    <td><?= $row['p_name'] ?></td>
                                    <td><?= $row['quantity'] ?></td>
                                    <td><?= $row['p_price'] ?></td>
                                    <td><?= $row['p_price']*$row['quantity'] ?></td>
                                </tr>
                                <?php
                            endforeach;
                            ?>
                            <tr>
                                <td style="font-size:18px" class=" font-weight-bold">Total</td>
                                <td></td>
                                <td></td>
                                <td style="font-size:17px" class="h5 font-weight-bold">
                                    &#8377;<?= number_format($totalPrice) ?>&nbsp;/-</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-md-12 d-flex align-items-center justify-content-center">
            <?php
            if ($details[0]['order_status'] == "Pending") {
                ?>

                <a href="<?= base_url('admin/dispatchOrder/') . $details[0]['order_id'] ?>">
                    <button id="printBtn" class="btn btn-primary my-3 btn-md font-weight-bold">Dispatch&nbsp;Order</button>
                </a>&nbsp;&nbsp;&nbsp;
                <a href="<?= base_url('admin/rejectOrder/') . $details[0]['order_id'] ?>">
                    <button id="printBtn" class="btn btn-primary my-3 btn-md font-weight-bold">Reject&nbsp;Order</button>
                </a>
                <?php
            } else if ($details[0]['order_status'] == "Dispatched") {
                ?>
                    <a href="<?= base_url('admin/deliverOrder/') . $details[0]['order_id'] ?>">
                        <button id="printBtn" class="btn btn-primary my-3 btn-md font-weight-bold">Delivered&nbsp;Order</button>
                    </a>&nbsp;&nbsp;&nbsp;
                    <a href="<?= base_url('admin/unableDeliverOrder/') . $details[0]['order_id'] ?>">
                        <button id="printBtn" class="btn btn-primary my-3 btn-md font-weight-bold">Unable to Deliver&nbsp;Order</button>
                    </a>
                <?php
            }
            ?>
        </div>
    </div>
</div>