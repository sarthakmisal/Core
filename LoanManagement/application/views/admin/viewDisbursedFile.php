<div class="bg-transparent p-5">
	<div class="row">
		<div class="col-md-12">
			<h1 class="font-weight-bold text-muted"><?=$viewFile[0]['c_name']?> <span class="font-weight-normal">- File Details</span> </h1>
			<table class="table">
				<tr>
					<td>
						<h5 class="font-weight-normal">Customer Name</h5>
						<p class="font-weight-bold text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?=$viewFile[0]['c_name']?></p>
					</td>
					<td>
						<h5 class="font-weight-normal">Requested Amount</h5>
						<p class="font-weight-bold text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&#8377;<?=number_format($viewFile[0]['loan_amount'])?></p>
					</td>
					<td>
						<h5 class="font-weight-normal">Installment</h5>
						<p class="font-weight-bold text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&#8377;<?= number_format($viewFile[0]['monthly_installment'])?></p>
					</td>
					<td>
						<h5 class="font-weight-normal">Entry Time</h5>
						<p class="font-weight-bold text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?= date("d M Y",strtotime($viewFile[0]['entry_time']))?></p>
					</td>
				</tr>
				<tr>
					<td>
						<h5 class="font-weight-normal">Customer Mobile</h5>
						<p class="font-weight-bold text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?=$viewFile[0]['c_phone']?></p>
					</td>
					<td>
						<h5 class="font-weight-normal">Installments</h5>
						<p class="font-weight-bold text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?=$viewFile[0]['installments']?></p>
					</td>
					<td>
						<h5 class="font-weight-normal">Customer Email</h5>
						<p class="font-weight-bold text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?=$viewFile[0]['c_mail']?></p>
					</td>
					<td>
						<h5 class="font-weight-normal">Customer Address</h5>
						<p class="font-weight-bold text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?=$viewFile[0]['c_address']?></p>
					</td>
				</tr>
				<tr>
					<td>
						<a href="<?=base_url("uploads/").$viewFile[0]['c_photo']?>" target="_blank">
							<h5 class="font-weight-normal text-dark">Customer Photo</h5>
							<p class="font-weight-bold  text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?=$viewFile[0]['c_photo']?></p>
						</a>
					</td>
					<td>
						<a href="<?=base_url("uploads/").$viewFile[0]['c_salary']?>" target="_blank">
							<h5 class="font-weight-normal text-dark">Customer Salary</h5>
							<p class="font-weight-bold  text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?=$viewFile[0]['c_salary']?></p>
						</a>

					</td>
					<td>
						<a href="<?=base_url("uploads/").$viewFile[0]['c_sign']?>" target="_blank">
							<h5 class="font-weight-normal text-dark">Customer Sign</h5>
							<p class="font-weight-bold  text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?=$viewFile[0]['c_sign']?></p>
						</a>
					</td>
					<td>
						<h5 class="font-weight-normal">File Date</h5>
						<p class="font-weight-bold text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?=$viewFile[0]['file_date']?></p>
					</td>
				</tr>
				<tr>
					<td>
						<h5 class="font-weight-normal">Witness Name</h5>
						<p class="font-weight-bold text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?=$viewFile[0]['w_name']?></p>
					</td>
					<td>
						<h5 class="font-weight-normal">Witness Phone</h5>
						<p class="font-weight-bold text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?=$viewFile[0]['w_phone']?></p>
					</td>
					<td>
						<h5 class="font-weight-normal">Witness Mail</h5>
						<p class="font-weight-bold text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?= $viewFile[0]['w_mail']?></p>
					</td>
					<td>
						<h5 class="font-weight-normal">Witness PAN</h5>
						<p class="font-weight-bold text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?= $viewFile[0]['w_pan']?></p>
					</td>
				</tr>
				<tr>
					<td>
						<a href="<?=base_url("uploads/").$viewFile[0]['w_photo']?>" target="_blank">
							<h5 class="font-weight-normal text-dark">Witness Aadhar</h5>
							<p class="font-weight-bold  text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?=$viewFile[0]['w_photo']?></p>
						</a>
					</td>
					<td>
						<a href="<?=base_url("uploads/").$viewFile[0]['w_sign']?>" target="_blank">
							<h5 class="font-weight-normal text-dark">Witness Photo</h5>
							<p class="font-weight-bold  text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?=$viewFile[0]['w_sign']?></p>
						</a>

					</td>
					<td>
						<a href="<?=base_url("uploads/").$viewFile[0]['w_sign']?>" target="_blank">
							<h5 class="font-weight-normal text-dark">Witness Sign</h5>
							<p class="font-weight-bold  text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?=$viewFile[0]['w_sign']?></p>
						</a>
					</td>
					<td>
						<h5 class="font-weight-normal">Witness Address</h5>
						<p class="font-weight-bold text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?=$viewFile[0]['w_address']?></p>
					</td>
				</tr>
			</table>

		</div>
		<?php if($viewFile[0]['file_status']==="Pending"): ?>
		<div class="col-md-12 d-flex justify-content-end">
			<a class="mx-4" href="<?=base_url('admin/approveFile/').$viewFile[0]['f_id']?>"><button class="btn-lg btn btn-info">Approve</button></a>
			<a href="<?=base_url('admin/rejectFile/').$viewFile[0]['f_id']?>"><button class="btn-lg btn btn-danger">Reject</button></a>
		</div>
	<?php endif;
	if($viewFile[0]['file_status']==="Approved"): ?>
		<div class="col-md-12 d-flex justify-content-end">
			<a class="mx-4" href="<?=base_url('admin/disburseDetails')."?id=".$viewFile[0]['f_id']?>"><button class="btn-lg btn btn-info">Disburse Fund</button></a>
			<a href="<?=base_url('admin/rejectFile/').$viewFile[0]['f_id']?>"><button class="btn-lg btn btn-danger">Reject File</button></a>
		</div>
	<?php endif; ?>
	</div>
</div>
<script type="text/javascript">
	// window.history.replaceState(null,null,window.location.href);
</script>