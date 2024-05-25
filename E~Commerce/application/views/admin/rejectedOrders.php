<?php
// print_r(count($orders));exit;
if(count($orders)==0){
    echo '
    <div class="container ">
    <div class="jumbotron m-5 ml-0">
    <h1 class="display-4">OOPS, Nothing to Show up!</h1>
    <p class="lead">Go Check Pending Ones.</p>
    <hr class="my-4">
    <p>Serving Customer First is Our Priority .</p>
    <a class="btn btn-primary w-25 btn-lg" style="float:right" href="'.base_url("admin/pendingOrders").'" role="button">Pending Orders</a>
    </div>
    </div>';
}else{
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-left font-weight-bold text-uppercase">Rejected Orders</h1>
        </div>
        <div class="col-md-12">
            <table class="table table-stripped table-hovered ">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>SN</th>
                        <th>Date</th>
                        <th>Order From</th>
                        <th>Address</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($orders as $key => $row):
                        ?>
                        <tr>
                            <td>
                                <a href="<?= base_url('admin/viewOrderDetails/') . $row['order_id'] ?>"><button
                                        class="btn btn-dark btn-sm">View Details</button></a>
                            </td>
                            <td><?= $key + 1 ?></td>
                            <td><?= date("M d Y", strtotime($row['order_date'])) ?></td>
                            <td><?= $row['deliver_to'] ?></td>
                            <td><?= $row['area'] . "," . $row['city'] . "," . $row['state'] . " - " . $row['pincode'] ?>
                            </td>
                            <td>&#8377;&nbsp;<?= number_format($row['amount_payable']) ?></td>
                        </tr>
                        <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
}
?>