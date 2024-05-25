<div class="container p-3">
	<div class="row">
		<div class="col-md-12">
			<h1 class="p-2 bg-dark">Add Loan File</h1>
		</div>
		<div class="col-md-12">
			
			<form action="<?=base_url('admin/saveFiles')?>" method="post" enctype="multipart/form-data">				
				<div class="row border p-3 mt-5 rounded-top rounded-bottom">
					<div class="col-md-12 mb-2 mt-1">
						<h1 class="text-center">Customer Details</h1>
					</div>
					<div class="col-md-4 my-2">
						Customer Name*
						<input required type="text" onkeyup="this.value = this.value.toLocaleUpperCase()" name="c_name" class="form-control">
					</div>
					<div class="col-md-4 my-2">
						Mobile*
						<input required type="text" onkeyup="this.value = this.value.toLocaleUpperCase()" name="c_phone" class="form-control">
					</div>
					<div class="col-md-4 my-2">
						Email*
						<input required type="text" onkeyup="this.value = this.value.toLocaleUpperCase()" name="c_mail" class="form-control">
					</div>
					<div class="col-md-12 my-2">
						Address*
						<textarea onkeyup="this.value = this.value.toLocaleUpperCase()" required rows="1" name="c_address" class="form-control"></textarea>
					</div>
					<div class="col-md-4 my-2">
						Aadhar Card*
						<input required type="number" name="c_aadhar" class="form-control">
					</div>
					<div class="col-md-4 my-2">
						Pan Card*
						<input required onkeyup="this.value = this.value.toLocaleUpperCase()" type="text"  name="c_pan" class="form-control">
					</div>
					<div class="col-md-4 my-2">
						Passport sized Photo*
						<input required type="file" accept="image/*" name="c_photo" class="form-control">
					</div>
					<div class="col-md-4 my-2">
						Salary Slip*
						<input required type="file" accept="image/*" name="c_salary" class="form-control">
					</div>
					<div class="col-md-4 my-2">
						Signature*
						<input required type="file" accept="image/*" name="c_sign" class="form-control">
					</div>
				</div>
				<div class="row border p-3 mt-5 rounded-top rounded-bottom">
					<div class="col-md-12 my-2 mt-1">
						<h1 class="text-center">Witness Details</h1>
					</div>
					<div class="col-md-4 my-2">
						Witness Name*
						<input required type="text" onkeyup="this.value = this.value.toLocaleUpperCase()" name="w_name" class="form-control">
					</div>
					<div class="col-md-4 my-2">
						Witness Mobile*
						<input required type="text" onkeyup="this.value = this.value.toLocaleUpperCase()" name="w_phone" class="form-control">
					</div>
					<div class="col-md-4 my-2">
						Witness Email*
						<input required type="text" onkeyup="this.value = this.value.toLocaleUpperCase()" name="w_mail" class="form-control">
					</div>
					<div class="col-md-8 my-2">
						Address*
						<textarea required rows="1" name="w_address" class="form-control"></textarea>
					</div>
					<div class="col-md-4 my-2">
						Aadhar Number*
						<input required type="number" name="w_aadhar" class="form-control">
					</div>
					<div class="col-md-4 my-2">
						Pan Number*
						<input required onkeyup="this.value = this.value.toLocaleUpperCase()" type="text" name="w_pan" class="form-control">
					</div>
					<div class="col-md-4 my-2">
						Witness Photo*
						<input required type="file" accept="image/*" name="w_photo" class="form-control">
					</div>
					<div class="col-md-4 my-2">
						Witness Signature*
						<input required type="file" accept="image/*" name="w_sign" class="form-control">
					</div>
				</div>
				<div class="row border p-3 mt-5 rounded-top rounded-bottom">
					<div class="col-md-12 my-2 mt-1">
						<h1 class="text-center">Loan Details</h1>
					</div>
					<div class="col-md-4 my-2">
						Type of Loan*
						<select name="loan_type" id="ram" onchange="loanInterest()" class="form-control">
							<option selected disabled >Click to Select</option>
							<?php foreach($loanTypes as $key=>$row): ?>
								<option value="<?=$row['l_id']?>"><?=$row['l_name']?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="col-md-4 my-2">
						Interest Percentage*
						<input type="text" onkeyup="this.value = this.value.toLocaleUpperCase()" id="interest" disabled class="form-control bg-white" name="loan_interest">
					</div>
					<div class="col-md-4 my-2">
						Amount Requested*
						<input type="text" onkeyup="this.value = this.value.toLocaleUpperCase()" name="loan_amount" class="form-control ">
					</div>
					<div class="col-md-4 my-2">
						Requested Installment*
						<input type="text" onkeyup="this.value = this.value.toLocaleUpperCase()" class="form-control " name="loan_installment">
					</div>
					<div class="col-md-8 my-2">
						Note
						<textarea onkeyup="this.value = this.value.toLocaleUpperCase()" class="form-control" rows="1" name="loan_note"></textarea>
					</div>
					<div class="col-md-12 my-4 d-flex justify-content-center">
						<button class="btn btn-success">Save Loan File</button>
					</div>
	
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	function loanInterest(){
		fetch(`<?=base_url("admin/loanInterest/")?>${ram.value}`).then(res=>res.json()).then(data=>interest.value=data)
		// alert(ram.value)
		// console.log(`<?=base_url("admin/loanInterest/")?>${ram.value}`)
		// location.href=`<?=base_url('admin/loanInterest/')?>${ram.value}`
	}
</script>