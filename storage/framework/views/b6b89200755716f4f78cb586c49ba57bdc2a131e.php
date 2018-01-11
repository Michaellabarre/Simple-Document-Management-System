<?php $__env->startSection('header'); ?>
	<div class="ui segment">
		<h2 class="ui header">
		    <i class="money icon"></i>
		    <div class="content">
		      Payroll 
		      <div class="sub header">Create Payroll CSV</div>
		  </h2>
	</div>
    <div class="ui segment">
		<div class="ui hidden divider"></div>
		<form  class="ui form"  action="<?php echo e(URL::to('payroll/importExcel')); ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<div class="field">
				<input type="file" name="import_file" />
			</div>
			<div class="field">
				<button class="ui mini teal button">Import File</button>
				<a href="<?php echo e(url('payroll/')); ?>" class="ui mini red button">Cancel</a>		
			</div>
	 	</form>
	</div>
	<?php if(!empty($data)): ?>
		<div class="ui segment">	
			<div class="ui hidden divider"></div>
			<form  class="ui form"  action="<?php echo e(URL::to('payroll/')); ?>" method="post" >
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
				<div class="field">
					<label>Title</label>
					<div class="field">
						<input type="text" name="title" placeholder="Enter the Title" value="<?php echo e($title); ?>">
					</div>
				</div>
				<div class="field">
					<label>Other Income Code</label>
					<select class="ui dropdown"  name="payrolltype_id" value="<?php echo e(old('payrolltype_id')); ?>">
						<option value="1">Active</option>
						<option value="0">InActive</option>
					</select>
				</div>
				<div class="field">
					<a href="<?php echo e(url('payroll/downloadcsv/')); ?>" class="ui mini green button">Download CSV</a>
					<button class="ui mini blue button">Save Payroll</button>
				</div>
			</form>
			<table class="ui teal table">
				<thead>
					<tr>
						<th>
							Lbpaccount
						</th>
						<th>
							Fullname
						</th>
						<th>
							Netamount
						</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td>
							<?php echo e($info['lbpaccount']); ?>

						</td>
						<td>
							<?php echo e($info['fullname']); ?>

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
<?php $__env->startSection('content'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>