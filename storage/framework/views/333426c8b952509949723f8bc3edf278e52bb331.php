<?php $__env->startSection('header'); ?>
	<div class="ui segment">
		<h2 class="ui header">
		    <i class="money icon"></i>
		    <div class="content">
		      Payroll 
		      <div class="sub header">Update/View Payroll </div>
		  </h2>
	</div>
	<?php if(!empty($data)): ?>
		<div class="ui segment">	
			<div class="ui hidden divider"></div>
			<form action="<?php echo e(route('payroll.update', [$data['id']])); ?>" class="ui form" method="post">
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
					<input type="hidden" name="_method" value="PUT">
				<div class="field">
					<label>Title</label>
					<div class="field">
						<input type="text" placeholder="Enter the Title" readonly="" value="<?php echo e($data->title); ?>">
					</div>
				</div>
				<div class="field">
					<label>Other Income Code</label>
					<select name="payrolltype_id" id="payrolltype_id" class="ui search selection dropdown" name="payrolltype_id">
						<?php $__currentLoopData = $Payrolltypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Payrolltype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($Payrolltype->id); ?>"><?php echo e($Payrolltype->payrolltype); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
				</div>
				<div class="field">
					<label>Status</label>
					<select class="ui dropdown" id="isactive" name="isactive"  value="<?php echo e($data['isactive']); ?>">
						<option value="1">Active</option>
						<option value="0">InActive</option>
					</select>
				</div>
				<div class="field">
					<a href="<?php echo e(url('payroll/downloadcsv',$data['title'])); ?>" class="ui mini basic black button">Generate LBP Findes CSV File</a>
					<a href="<?php echo e(url('payroll/downloadmanucsv',$data['title'])); ?>" class="ui mini basic black button">Generate Mannasoft Txt File</a>
					<a href="<?php echo e(url('payroll/downloadexceldata',$data['title'])); ?>" class="ui mini basic black button">Download Excel File</a>
					<button class="ui mini basic black button">Save Payroll</button>
				</div>
			</form>
			<table class="ui teal table">
				<thead>
					<tr>
						<th>
							Lbp Account
						</th>
						<th>
							Fullname
						</th>
						<th>
							Net Amount
						</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $data->item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td>
							<?php echo e($info['lbpaccount']); ?>

						</td>
						<td>
							<?php echo e($info['lastname'] . " " . $info['firstname']); ?>

						</td>
						<td>
							<?php echo e($info['netamount']); ?>

						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<script type="text/javascript">
		$('#isactive').dropdown("set selected", "<?php echo e($data['isactive']); ?>");
		$('#payrolltype_id').dropdown('set selected',"<?php echo e($data['payrolltype_id']); ?>");
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>