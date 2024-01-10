<!-- Add Bootstrap JS and jQuery links here -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<form action="save_card.php">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <h3>Add New Card</h3>
            </div>
            <div class="col-md-3">
                <label for="">Enter Icon</label>
                <input type="text" class="mb-3 form-control" name="u_icon">
            </div>
            <div class="col-md-3">
                <label for="">Enter Name</label>
                <input type="text" class="mb-3 form-control" name="u_name">
            </div>
            <div class="col-md-3">
                <label for="">Enter Mobile</label>
                <input type="text" class="mb-3 form-control" name="u_mobile">
            </div>
            <div class="col-md-3">
                <label for="">Enter Email</label>
                <input type="text" class="mb-3 form-control" name="u_mail">
            </div>
            <div class="col-md-12">
                <label for="">Enter Address</label>
                <textarea class="mb-3 form-control" name="u_add"></textarea>
            </div>
            <div class="col-md-6">
                <label for="">Enter Position</label>
                <input type="text" class="mb-3 form-control" name="u_position">
            </div>
            <div class="col-md-6">
                <label for="">Enter Company</label>
                <input type="text" class="mb-3 form-control" name="u_company">
            </div>
            <div class="col-md-12 mb-3 text-center">
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>