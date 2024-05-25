<?php
$totalPrice = 0;
// print_r($cart[0]);exit;
if(count($cart)==0){
    echo '
    <div class="container ">
    <div class="jumbotron m-5 ml-0">
    <h1 class="display-4">OOPS, Your Cart is Empty!</h1>
    <p class="lead">Go Get Items of your Choice.</p>
    <hr class="my-4">
    <p>Explore Throughout the Application and Add Items to your Cart .</p>
    <a class="btn btn-primary btn-lg" href="'.base_url().'" role="button">Dashboard</a>
    </div>
    </div>';
}else{
?>
<div class="container-fluid px-5">
    <div class="row">
        <div class="col-md-9 border shadow">
            <div class="row">
                <div class="col-md-12">
                    <h1>User Cart</h1>
                </div>
                <?php
                foreach ($cart as $key => $row):
                    $totalPrice += $row['p_price']*$row['quantity'];
                    ?>
                    <div class="col-md-3 my-4">
                        <img src="<?= base_url('uploads/') . explode("&&", $row['p_images'])[0] ?>" width="100%" alt="">
                    </div>
                    <div class="col-md-7 my-4">
                        <div class="row">
                            <div class="col-md-12">
                                <p style="font-size:1.5rem" class="font-weight-bold"><?= $row['p_name'] ?></p>
                            </div>
                            <div class="col-md-12">
                                <input type="text" hidden name="ram" id="individualSum" value="<?=$row['p_price']?>">
                                <input type="text" hidden name="sham" value="<?=$row['p_price']*$row['quantity']?>">
                                <h6 style="font-size:1.5rem">&#8377;&nbsp;<?= number_format($row['p_price']) ?>&nbsp;/-
                                </h6>
                            </div>
                            <div class="col-md-12">
                                <button onclick="decrease(quantity,<?= $row['c_id'] ?>,<?= $key ?>)"
                                    style="margin-top:-5px;font-size:1.5rem"
                                    class="btn btn-sm btn-dark rounded-0">-</button>&nbsp;
                                <input type="button" id="quantity"
                                    style="background:transparent;font-weight:bold;border:none"
                                    value="<?= $row['quantity'] ?>">&nbsp;
                                <button onclick="increase(quantity,<?= $row['c_id'] ?>,<?= $key ?>)"
                                    style="margin-top:-5px;font-size:1.5rem"
                                    class="btn btn-sm btn-dark rounded-0">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a class="text-decoration-none" href="<?= base_url('user/removeFromCart/') . $row['c_id'] ?>">
                            <button class="my-5 btn btn-danger d-flex"><i
                                    class="mt-1 fa-solid fa-circle-xmark"></i>&nbsp;Remove</button>
                        </a>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>
        </div>
        <div class="col-md-3 border shadow">
            <div class="row">
                <div class="col-md-10 shadow-lg position-relative my-5 mx-auto">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-md-12 mt-2">

                                <p>Sub Total : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &#8377;&nbsp;<input id="totalAmount" style="border:none;width:25%;outline:none;disabled;pointer-events:none" value=<?= number_format($totalPrice) ?> >&nbsp;/-</p>
                                    <hr>
                                    <p>Charges
                                        :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &#8377;&nbsp;0&nbsp;/-</p>
                                        <hr>
                                        <p class="font-weight-bold">Total
                                            :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#8377;&nbsp;<input id="totalAmount" style="border:none;width:25%;outline:none;disabled;pointer-events:none;font-weight:bold" value=<?= number_format($totalPrice) ?> >&nbsp;/-
                                        </p>
                            </div>
                            <div class="col-md-12">
                                <a class="text-decoration-none" href="<?=base_url('user/confirmAddress/')?>">
                                    <button class="btn btn-dark font-weight-bold mx-4 p-2 px-3 my-2">Proceed&nbsp;to&nbsp;Checkout</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // console.log(individualSum[0].name)
    function updateData(quantity,target){
        document.getElementsByName('sham')[target].value=document.getElementsByName('ram')[target].value*quantity
        // document.getElementsByName('ram')[target].value=document.getElementsByName('ram')[target].value*quantity
        totalSum()
    }
    function totalSum(){
        ele=0
        Array.from(document.getElementsByName('sham')).forEach(element => {
            ele+=Number(element.value)
        });
        totalAmount[0].value=ele
        totalAmount[1].value=ele
    }
    function increase(first, c_id, target) {
        if(<?= count($cart)?>==1){
            if (first.value < 6){
                fetch('<?= base_url("user/increaseQuantity/") ?>'+c_id).then(res=>res.json()).then(data=>{
                    quantity.value=data
                    updateData(data,target);
                })
            }
        }else{
            console.log(first[target].value, c_id, target)
            if (first[target].value < 6){
                fetch('<?= base_url("user/increaseQuantity/") ?>'+c_id).then(res=>res.json()).then(data=>{
                    quantity[target].value=data
                    updateData(data,target);
                })
            }
        }
    }
    function decrease(first, c_id, target) {
        if(<?= count($cart)?>==1){
            if (first.value > 1){
                fetch('<?= base_url("user/decreaseQuantity/") ?>'+c_id).then(res=>res.json()).then(data=>{
                    quantity.value=data;
                    updateData(data,target);
            })
            }
        }else{
            console.log(first[target].value, c_id, target)
            if (first[target].value > 1){
                fetch('<?= base_url("user/decreaseQuantity/") ?>'+c_id).then(res=>res.json()).then(data=>{
                    quantity[target].value=data;
                    updateData(data,target);
                })
            }
        }
    }
</script>

<?php
}
?>