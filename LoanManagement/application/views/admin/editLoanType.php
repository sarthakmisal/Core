<div class="container my-5">
		<form action="<?=base_url('admin/updateLoanType/').$loanTypes[0]['l_id']?>" method="post">
	<div class="row">

		<div class="col-md-12">
			<h1 class="bg-dark p-2">Loan Type</h1>
		</div>
		<div class="col-md-6 my-4">
			<label for="l_name">Kind of Loan</label>
			<input autofocus value="<?=$loanTypes[0]['l_name']?>" type="text" name="l_name" class="form-control outline">
		</div>
		<div class="col-md-6 my-4">
			<label for="l_interest">Interest</label>
			<input type="number" value="<?=$loanTypes[0]['l_interest']?>" name="l_interest" class="form-control outline">
		</div>
		<div class="col-md-12 d-flex justify-content-end">
			<button class="btn btn-lg btn-success">Save Update</button>
		</div>
	</div>
	</form>

</div>