<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-md-5 bg-light shadow my-5">
            <div class="p-5">
                <form action="<?=base_url('user/loginProcess/')?>" method="post">
                    <h6 class="font-weight-normal">Already Account,</h6>
                    <h2>LogIn Here</h2>
                    <input required class="my-3 form-control" type="text" name="u_phone" onfocus="this.placeholder=''" onblur="this.placeholder='Email or Phone'" placeholder="Email or Phone">
                    <input required class="my-3 form-control" type="password" name="u_pass" onfocus="this.placeholder=''" onblur="this.placeholder='Enter Password'" placeholder="Enter Password">
                    <button class="btn btn-dark rounded-0">LogIn Now</button>
                </form>
                <p class="my-2">Don't have an Account?<a class="text-decoration-none" href="<?=base_url('user/registerPage')?>"> Register Here</a> </p>
            </div>
        </div>
    </div>
</div>