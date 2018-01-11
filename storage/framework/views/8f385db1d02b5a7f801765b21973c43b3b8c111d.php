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
				<input type="file" name="import_file" value="<?php echo e(old('import_file')); ?>" / >
			</div>
			<div class="field">
				<button class="ui mini basic black button">Upload Excel File</button>
				<a href="<?php echo e(url('payroll/')); ?>" class="ui mini basic black button">Cancel</a>		
			</div>
	 	</form>
	</div>
	<div class="ui segment">	
		<?php if(!empty($data)): ?>
		<div class="ui hidden divider"></div>
		<form  class="ui form"  action="<?php echo e(URL::to('payroll/')); ?>" method="post" >
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<div class="field">
				<label>Title</label>
				<div class="field">
					<?php if(!empty($title)): ?>
						<input type="text" name="title" placeholder="Enter the Title" value="<?php echo e($title); ?>" readonly="">
					<?php endif; ?>
				</div>
			</div>
			<div class="field">
				<label>Other Income Code</label>
				<select class="ui search selection dropdown" name="payrolltype_id">
					<?php $__currentLoopData = $Payrolltypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Payrolltype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($Payrolltype->id); ?>"><?php echo e($Payrolltype->payrolltype); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>
			<div class="field">
				<a href="<?php echo e(url('payroll/downloadcsv/0')); ?>" class="ui mini basic black button">Generate LBP Findes CSV File</a>
				<a href="<?php echo e(url('payroll/downloadmanucsv/0')); ?>" class="ui mini basic black button">Generate Mannasoft Txt File</a>
				<button class="ui mini basic black button">Save Payroll</button>
			</div>
		</form>
		<?php endif; ?>
		<?php if(!empty($first_error)): ?>
		<h3 class="ui dividing header">
			Uploaded Account Number and Employee id are non-existent in the System Library
		</h3>
			<table class="ui red table">
				<thead>
					<tr>
						<th>
							Employee Id
						</th>
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
					<?php $__currentLoopData = $first_error; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td>
							<?php echo e($info['employee_number']); ?>

						</td>
						<td>
							<?php echo e($info['lbpaccount']); ?>

						</td>
						<td>
							<?php echo e($info['lastname']. " " . $info['firstname']); ?>  
						</td>
						<td>
							<?php echo e($info['netamount']); ?>

						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		<?php endif; ?>
		<?php if(!empty($second_error)): ?>
		<h3 class="ui dividing header">
			Invalid Input Format/Type (Numeric data expected for Financial entries)
		</h3>
			<table class="ui red table">
				<thead>
					<tr>
						<th>
							Employee Id
						</th>
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
					<?php $__currentLoopData = $second_error; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td>
							<?php echo e($info['employee_number']); ?>

						</td>
						<td>
							<?php echo e($info['lbpaccount']); ?>

						</td>
						<td>
							<?php echo e($info['lastname']. " " . $info['firstname']); ?>  
						</td>
						<td>
							<?php echo e($info['netamount']); ?>

						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		<?php endif; ?>
		<?php if(!empty($third_error)): ?>
		<h3 class="ui dividing header">
			Uploaded Account Number/Employee id is not consistent with System Library entry
		</h3>
			<table class="ui red table">
				<thead>
					<tr>
						<th>
							Employee Id
						</th>
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
					<?php $__currentLoopData = $third_error; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td>
							<?php echo e($info['employee_number']); ?>

						</td>
						<td>
							<?php echo e($info['lbpaccount']); ?>

						</td>
						<td>
							<?php echo e($info['lastname']. " " . $info['firstname']); ?>  
						</td>
						<td>
							<?php echo e($info['netamount']); ?>

						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		<?php endif; ?>
		<?php if(!empty($data)): ?>
			<h3 class="ui dividing header">
				Successfully Uploaded
			</h3>
			<table class="ui teal table">
				<thead>
					<tr>
						<th>
							Employee Id
						</th>
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
							<?php echo e($info['employee_number']); ?>

						</td>
						<td>
							<?php echo e($info['lbpaccount']); ?>

						</td>
						<td>
							<?php echo e($info['lastname']. " " . $info['firstname']); ?>  
						</td>
						<td>
							<?php echo e($info['netamount']); ?>

						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		<?php endif; ?>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>