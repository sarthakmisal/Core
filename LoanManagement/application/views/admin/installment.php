<div class="bg-transparent p-5">
	<div class="row">
		<div class="col-md-6">
			<h1 class="font-weight-normal text-muted"><span class="font-weight-normal">Installment of </span><?=$Installment[0]['c_name']?> </h1>
			<table class="table">
				<tr>
					<td>
						<h5 class="font-weight-normal">Disbursed Amount </h5>
						<p class="font-weight-bold text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&#8377;&nbsp;<?=number_format($Installment[0]['approved_amount'])?>&nbsp;/-</p>
					</td>
				</tr>
				<tr>
					<td>
						<h5 class="font-weight-normal">Interest Percentage</h5>
						<p class="font-weight-bold text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?=$Installment[0]['l_interest']?>%</p>
					</td>
				</tr>
				<tr>
					<td>
						<h5 class="font-weight-normal text-dark">Collection Amount</h5>
						<p class="font-weight-bold  text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&#8377;&nbsp;<?=number_format($Installment[0]['collection_amount'])?>&nbsp;/-</p>
					</td>
				</tr>
				<tr>
					<td>
						<h5 class="font-weight-normal">Duration</h5>
						<p class="font-weight-bold text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?=$Installment[0]['months_requested']?> Months</p>
					</td>
				</tr>
				<tr>
					<td>
						<h5 class="font-weight-normal text-dark">Installment Amount</h5>
						<p class="font-weight-bold  text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&#8377;&nbsp;<?=number_format($Installment[0]['monthly_installment'])?>&nbsp;/-</p>
					</td>
				</tr>
			</table>

		</div>
		<?php
			$months=[];
			for($i=1;$i<=$Installment[0]['months_requested'];$i++){
				$mon=date("M-Y",strtotime("+$i month"));
				if(count($this->myModel->selectWhere("installments",['month'=>$mon,"f_id"=>$Installment[0]['f_id']]))===0){$months[]=$mon;}
			}
			// print_r(count($months));exit;
		 ?>
		<div class="col-md-6 my-5">
			<div class="row">
				<?php if(count($months)>0): ?>
				<div class="col-md-12">
					<form action="<?=base_url('admin/saveInstallment/').$Installment[0]['f_id']?>" method=post>
						<div class="row">
							<div class="col-md-4">
								<label for="month">Select Month</label>
								<select required name="month" class="form-control">
									<?php foreach($months as $row): ?>
										<option><?=$row?></option>
								<?php endforeach; ?>
								</select>
							</div>
							<div class="col-md-4">
								<label for="amount">Amount to be Paid</label>
								<input required type="number" name="amount" readonly value="<?=$Installment[0]['monthly_installment']?>" class="form-control bg-white">
							</div>
							<div class="col-md-4">
								<label for="date">Date</label>
								<input required type="date" name="date" value="<?=date('Y-m-d')?>" class="form-control">
							</div>
							<div class="col-md-12 d-flex">
								<button class="btn btn-info ml-auto mt-4">Receive Amount</button>
							</div>
						</div>
					</form>
				</div>
			<?php endif; ?>
				<div class="col-md-12 mt-4">
				<?php if(count($paidInstallments)>0){ ?>

					<h4 class="font-weight-bold text-muted mt-1">Installments Paid Yet</h4>
				<?php } ?>
					<table class="table table-sm">
						<thead >
							<th>SN</th>
							<th>Month</th>
							<th>Amount</th>
							<th>Date</th>
						</thead>
						<tbody>
							<?php
							$totalPaid=0;
							foreach($paidInstallments as $key=>$row):
								$totalPaid+=$row['amount'];
							 ?>
								<tr>
									<td><?=$key+1?></td>
									<td><?=$row['month']?></td>
									<td>&#8377;&nbsp;<?=number_format($row['amount'])?>&nbsp;/-</td>
									<td><?=date("d M Y",strtotime($row['date']))?></td>
								</tr>
							<?php endforeach; ?>
							
						</tbody>
					</table>
				<?php if(count($paidInstallments)>0){ ?>

					<hr>
						<span class="d-flex">						
							<h5 class="font-weight-bold">Total Amount Paid : </h5>
							<h5 class="mx-4">&#8377;&nbsp;<?=number_format($totalPaid)?>&nbsp;/-</h5>
						</span>
					<hr>
				<?php }else{ ?>
					<!-- <hr> -->
						<span class="d-flex justify-content-center my-3">						
							<h5 class="font-weight-bold my-2">No Installments Paid Yet</h5>
						</span>
					<hr>
				<?php } ?>
				</div>
			</div>
		</div>
		<?php if(count($months)===0&&$Installment[0]['file_status']!="Closed"){ ?>
			<div class="col-md-12 d-flex justify-content-end">
				<a onclick="return confirm('Are you Sure?')" href="<?=base_url('admin/closeFile/').$Installment[0]['f_id']?>">
					<button class="btn btn-danger btn-lg">Close File</button>
				</a>
			</div>
		<?php } ?>
	</div>
</div>
<script type="text/javascript">
	// window.history.replaceState(null,null,window.location.href);
</script>