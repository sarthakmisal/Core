<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-md-5 bg-light shadow">
            <div class="pb-4 p-5">
                <form action="<?=base_url('user/registerUser')?>" method="post">
                    <h6 class="font-weight-normal">New User,</h6>
                    <h2>Register Here</h2>
                    <input autofocus required class="my-3 form-control" type="text" name="u_name" onfocus="this.placeholder=''"
                        onblur="this.placeholder='Name'" placeholder="Name">
                    <input required class="my-3 form-control" type="number" name="u_phone" onfocus="this.placeholder=''"
                        onblur="this.placeholder='Enter Phone'" placeholder="Enter Phone">
                    <input required class="my-3 form-control" type="text" name="u_mail" onfocus="this.placeholder=''"
                        onblur="this.placeholder='Enter Email'" placeholder="Enter Email">
                    <input required class="my-3 form-control" id="pass" type="password" onkeyup="checkPass()"
                        name="u_pass" onfocus="this.placeholder=''" onblur="this.placeholder='Enter Password'"
                        placeholder="Enter Password">
                    <input required class="my-3 form-control" id="cpass" onkeyup="checkPass()" type="password"
                        onfocus="this.placeholder=''" onblur="this.placeholder='Confirm Password'"
                        placeholder="Confirm Password">
                    <span style="font-size:15px;position:relative;top:-10px;float:right" id="passError" class="text-danger "></span><br>
                    <button type="submit" id="submit" disabled class="btn btn-dark rounded-0">Register Now</button>
                </form>
                <p class="my-2">Already have an Account?<a class="text-decoration-none"
                        href="<?= base_url('user/loginPage') ?>"> LogIn Here</a> </p>
            </div>
        </div>
    </div>
</div>

<script>
    checkPass = () => {
        if(pass.value.length>5){

            if (pass.value == cpass.value) {
                submit.removeAttribute('disabled')
                passError.innerHTML = ""
                
            } else passError.innerHTML = "Password Doesn't Match"
        }else   passError.innerHTML = "At Least 6 Characters Required"
    }
</script>