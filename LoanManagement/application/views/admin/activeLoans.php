<div class="bg-transparent py-5">
	<div class="row">
		<div class="col-md-12">
			<table class="table w-100 table-hovered w-100 table-stripped table-bordered">
				<thead class="thead-dark">
					<tr>
						<th width="1%">SN</th>
						<th>Name</th>
						<th width="1%">Mobile</th>
						<th>Loan&nbsp;Type</th>
						<th>Disbursed&nbsp;Amount</th>
						<th>Interest&nbsp;%</th>
						<th>Collection</th>
						<th>Collected</th>
						<th>Pending</th>
						<th>Loan&nbsp;Date</th>
						<th width="1%">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($activeLoans as $key=>$row): ?>
						<tr>
							<td><?= $key+1?></td>
							<td><?=$row['c_name']?></td>
							<td><?=$row['c_phone']?></td>
							<td><?=$row['l_name']?></td>
							<td>&#8377;&nbsp;<?= number_format($row['approved_amount'])?>&nbsp;/-</td>
							<td><?=$row['l_interest']?>%</td>
							<td>&#8377;&nbsp;<?= number_format($row['collection_amount'])?>&nbsp;/-</td>
							<td>&#8377;&nbsp;<?= number_format(0)?>&nbsp;/-</td>
							<td>&#8377;&nbsp;<?= number_format($row['collection_amount'])?>&nbsp;/-</td>
							<td><?=date("d M Y",strtotime($row['file_date']))?></td>
							<td style="white-space:nowrap;">
								<a href="<?=base_url('admin/viewFile/').$row['f_id']?>">
									<button class="btn btn-info text-white btn-sm rounded-pill"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;View</button>
								</a>
								<a href="<?=base_url('admin/installment/').$row['f_id']?>">
									<button class="btn btn-info text-white btn-sm rounded-pill"><i class="fa fa-rupee"></i>&nbsp;&nbsp;Installment</button>
								</a>
							</td>
						</tr>
					<?php endforeach; 
					if(count($activeLoans)==0){
						?>
						<tr>
							<td colspan="10">
								<br><br>
								<h1 class="text-center">No Records Found</h1>
								<br><br>
							</td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>