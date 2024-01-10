<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#logInModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="logInModal" tabindex="-1" role="dialog" aria-labelledby="logInModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logInModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="http://localhost/hphp/FORUM/partials/_register.php" method="post">
                    <div class="form-group">
                        <label for="email">Username</label>
                        <input type="text" class="form-control" name="u_username" id="u_username"
                            placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="u_pass" id="u_pass"
                            placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>