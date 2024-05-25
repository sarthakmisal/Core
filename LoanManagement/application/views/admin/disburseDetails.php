<?php 	$collect=($details[0]['loan_amount']*$details[0]['l_interest'])/100 ?>

<div class="bg-transparent mx-5 p-5 bg-white">
	<form action="<?=base_url('admin/disburseFund/').$_GET['id']?>" method='post'>
		<div class="row">
			<div class="col-md-12">
				<h1>Disburse Loan Fund Details</h1>
			</div>
			<div class="col-md-4 my-2">
				<label>Account Holder Name</label>
				<input onkeyup="this.value=this.value.toLocaleUpperCase()" class="form-control" value="<?=$details[0]['account']?>" type="text" name="account">
			</div>
			<div class="col-md-4 my-2">
				<label>Account Number</label>
				<input class="form-control" type="number" value="<?=$details[0]['number']?>" name="number">

			</div>
			<div class="col-md-4 my-2">
				<label>Approved Amount</label>
				<input class="form-control" type="number" name="approved_amount"  id="approved" value="<?=$details[0]['loan_amount']?>" onkeyup="setUp()">
			</div>
			<div class="col-md-4 my-2">
				<label>Interest Rate</label>
				<input disabled class="form-control bg-transparent" type="number" id="rate" value="<?=$details[0]['l_interest']?>" onkeyup="setUp()">
			</div>
			<div class="col-md-4 my-2">
				<label>Collection Amount</label>
				<input class="form-control" type="number" name="collection_amount" value="<?=$collect?>" id="collection" onkeyup="setUp()">
			</div>
			<div class="col-md-4 my-2">
				<label>No of Installments</label>
				<input class="form-control" type="number" onkeyup="installMent()" value="<?=$details[0]['loan_amount']/$details[0]['loan_installment']?>" name="installments" id="months_requested">

			</div>
			<div class="col-md-4 my-2">
				<label>Monthly Installment</label>
				<input class="form-control" type="number" onkeyup="installment()" name="monthly_installment" id="monthly_installment">

			</div>
			<div class="col-md-4 my-2">
				<label>Bank Name</label>
				<input onkeyup="this.value=this.value.toLocaleUpperCase()" value="<?=$details[0]['bank']?>" class="form-control" type="text" name="bank">

			</div>
			
			<div class="col-md-4 my-2">
				<label>IFSC Code</label>
				<input onkeyup="this.value=this.value.toLocaleUpperCase()" value="<?=$details[0]['ifsc']?>" class="form-control" type="text" name="ifsc">
			</div>

			<div class="col-md-12 mt-4 d-flex">
				<button class="btn btn-dark btn-lg mx-auto">Disburse Fund</button>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
	collection.value=<?=$details[0]['loan_amount']?>+(approved.value*rate.value)/100
	
	installment=()=>{
		months_requested.value=Math.ceil(collection.value/monthly_installment.value)
	}
	installMent=()=>{
			monthly_installment.value=collection.value/months_requested.value
	}
	monthly_installment.value=Number(collection.value)/months_requested.value
	setUp=()=>{
		ue=(approved.value*rate.value)/100
		collection.value=Number(approved.value)+ue
		monthly_installment.value=approved.value/months_requested.value
	}

</script>