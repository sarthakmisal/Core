<div class="container my-5">
  <div class="row d-flex justify-content-center">
    <div class="col-md-6">
      <h1 class="ml-5 font-weight-bold text-success">Confirm Shifting Address</h1>
      <form action="<?= base_url('user/placeOrder/') ?>" method="post"
        class="d-flex flex-column justify-content-center align-items-center">
        <input required type="text" class="my-3" placeholder="Deliver to" name="deliver_to" class="form-control w-100">
        <input required type="text" class="my-3" placeholder="State" name="state" class="form-control w-100">
        <!-- <input required type="text" class="my-3" placeholder="District" name="district" class="form-control w-100"> -->
        <input required type="text" class="my-3" placeholder="City" name="city" class="form-control w-100">
        <input required type="text" class="my-3" placeholder="Area" name="area" class="form-control w-100">
        <input required type="text" class="my-3" placeholder="Pin Code" name="pincode" class="form-control w-100">
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>