<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signUpModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bolder" style="margin-left: 90px;" id="signUpModalLabel">New User Registration Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/partials/_register.php" method="POST">
                    <div class="form-group">
                        <label for="u_name">Name</label>
                        <input type="text" class="form-control" name="u_name" id="u_name" aria-describedby="emailHelp"
                            placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="u_user">Username</label>
                        <input type="text" maxlength="15" class="form-control" name="u_username" id="u_username"required
                            aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="u_pass1">Password</label>
                        <input type="password" class="form-control" name="u_pass1" id="u_pass1"
                            placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="u_pass2">Re-Enter Password</label>
                        <input type="password" class="form-control" name="u_pass2" id="u_pass2" placeholder="Password" onblur="pass1()" required>
                        <small id="passHelp" class="form-text text-muted">Both passwords must be same.</small>
                    </div>
                    <div class='text-center'>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div><br>
                    <div style="margin-bottom: -25px;" class="card-footer text-muted text-center">
                        Already have an account? <a href="http://localhost/hphp/Login_System/log_in.php">Log In</a>
                    </div>
                </form>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>
<script>
    function pass1(){
        var a=document.getElementById('u_pass1').value
        var b=document.getElementById('u_pass2').value
        if(!(a==b)){
            document.getElementById('u_pass2').value=null
            document.getElementById('passHelp').classList.remove("text-muted")
            document.getElementById('passHelp').classList.add("text-danger")
        }

    }
</script>
