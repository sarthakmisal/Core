<div class="bg-transparent p-5">
	<div class="row">
		<div class="col-md-12">
			<table class="table w-100 table-hovered table-stripped table-bordered">
				<thead class="thead-dark">
					<tr>
						<th>SN</th>
						<th>Name</th>
						<th>Mobile</th>
						<th>Loan Type</th>
						<th>Disbursed Amount</th>
						<th>Disbursed Date</th>
						<th width="2%">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($disbursedFiles as $key=>$row): ?>
						<tr>
							<td><?= $key+1?></td>
							<td><?=$row['c_name']?></td>
							<td><?=$row['c_phone']?></td>
							<td><?=$row['l_name']?></td>
							<td>&#8377;&nbsp;<?= number_format($row['approved_amount'])?>&nbsp;/-</td>
							<td><?=date("d M Y",strtotime($row['disbursed_date']))?></td>
							<td style="white-space:nowrap;">
								<a href="<?=base_url('admin/viewDisbursedFile/').$row['f_id']?>">
									<button class="btn btn-info text-white btn-sm rounded-pill"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;View</button>
								</a>
							</td>
						</tr>
					<?php endforeach; 
					if(count($disbursedFiles)==0){
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