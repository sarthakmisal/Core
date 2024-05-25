
<div class="container mt-5">		
	<form action="<?=base_url('admin/saveLoanType')?>" method="post">
	<div class="row">

		<div class="col-md-12">
			<h1 class="bg-dark p-2">Loan Type</h1>
		</div>
		<div class="col-md-6 my-4">
			<label for="l_name">Kind of Loan</label>
			<input autofocus type="text" name="l_name" class="form-control outline">
		</div>
		<div class="col-md-6 my-4">
			<label for="l_interest">Interest</label>
			<input type="number" name="l_interest" class="form-control outline">
		</div>
		<div class="col-md-12 d-flex justify-content-end">
			<button class="btn btn-lg btn-dark">Save Loan Type</button>
		</div>
	</form>
	</div>
	<div class="row my-5">
		<div class="col-md-12 d-flex justify-content-center">
			<h1 class="text-uppercase font-weight-bold my-4">All Loan Types</h1>
		</div>
		<div class="col-md-12">
			<table class="table table-hovered table-stripped table-bordered">
				<thead class="thead-dark">
					<tr>
						<th>SN</th>
						<th>Name</th>
						<th>Interest</th>
						<th width="2%" >Action</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($loanTypes as $key=>$row): ?>
					<tr>
						<td><?=$key+1?></td>
						<td><?= $row['l_name']?></td>
						<td><?= $row['l_interest']?></td>
						<td style="white-space: nowrap;">
							<a onclick="return confirm('Wanna Make changes?')" href="<?=base_url('admin/editLoanType/').$row['l_id'] ?>">
								<button class="btn btn-lg"><i class="fa fa-edit text-primary"></i></button>
							</a>
							<a onclick="return confirm('Are you sure?')" href="<?=base_url('admin/deleteLoanType/').$row['l_id'] ?>">
								<button class="btn btn-lg"><i class="fa fa-trash text-danger"></i></button>
							</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

</div>
