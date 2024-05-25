<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script> -->

<style>
    body {
        background: silver;
    }

    @media print {

        /* styling goes here */
        .printNavbar {
            display: none;
        }

        .shadow-lg {
            box-shadow: none !important;
        }

        .makePrintReady {
            border: none !important;
            box-shadow: none !important;
            display: block !important;
            width: 100% !important;
            padding: 0px !important;
            margin: 0px !important;
        }
    }
</style>
<script>
    function makePrint() {
        printBtn.classList.add("d-none")
        ram.classList.remove("shadow-lg")
        print()
        ram.classList.add("shadow-lg")
        // printBtn.classList.remove("d-none")
    }
</script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<title><?= $details[0]['deliver_to'] ?></title>
<div class="container my-5 makePrintReady">
    <div class="row justify-content-center makePrintReady position-relative my-5 py-4">
        <div id="ram" oncontextmenu="makePrint()" class="col-md-11 shadow-lg p-5 w-100  makePrintReady">
            <div class="row">
                <div class="col-md-12">
                    <img src="<?= base_url('uploads/Logo/mylogo.png') ?>" class="" width="170px;" alt="">
                </div>
                <h2 class="mt-4 mx-3"><?= $details[0]['deliver_to'] ?></h2>
                <div class="col-md-12">
                    <table class="table">
                        <tr>
                            <td>Order Date : <?= $details[0]['order_date'] ?><br>
                                Order No : S00M0<?= $details[0]['order_id'] ?></td>
                            <td></td>
                            <td></td>
                            <td class="text-right">
                                <?= $details[0]['area'] ?>,&nbsp;<?= $details[0]['city'] ?><br>
                                <?= $details[0]['district'] ?>,&nbsp;<?= $details[0]['state'] ?><br>
                                <?= $details[0]['pincode'] ?>
                                <br><br>
                            </td>
                        </tr>
                    </table>
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
                                    <td><?= $row['amount_payable'] ?></td>
                                </tr>
                                <?php
                            endforeach;
                            ?>
                            <tr>
                                <td class="h5 font-weight-bold">Total</td>
                                <td></td>
                                <td></td>
                                <td class="h5 font-weight-bold">&#8377;<?= number_format($totalPrice) ?>&nbsp;/-</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="col-md-12">
                        <p style="font-size:15px" class="text-center font-weight-normal mt-5">
                            Copyright&copy;SarthakMisal</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 d-flex align-items-center justify-content-center">
            <button onclick="makePrint()" id="printBtn" class="btn btn-primary my-3 btn-md w-25 font-weight-bold">Print</button>
        </div>
    </div>
</div>
