<?php $__env->startSection('header'); ?>
<div class="ui segment">
	<div class="ui grid">
		  <div class="four column row">
		    <div class="left floated column">
		    	<div class="column">
					<h2 class="ui header">
					    <i class="money icon"></i>
					    <div class="right content">
					     Manage Payroll
					    </div>
					</h2>
		  		</div>
		    </div>
		    <div class="right floated column">
		    <div class="right floated column">
		
		    	<a class="ui blue mini right floated button" href="<?php echo e(route('payroll.create')); ?>">
				<i class="icon add"></i>
					Add Payroll
				</a>
		    </div>
		    </div>
		  </div>
 	</div>	
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<div class="ui segment">
		<div class="ui styled fluid accordion">
			<div class="title">
		    	<i class="dropdown icon"></i>
		    	Search
		  	</div>
		  	<div class="content">
				<form  class="ui form" action="<?php echo e(url('payroll.search')); ?>" method="get">
					<div class="two fields">
						<div class="field">
							<input type="text" placeholder="Search" name="search" value="<?php echo e(Request::get('search')); ?>">
						</div>
						<div class="field">
							<select class="ui dropdown"  name="payrolltype_id" value="<?php echo e(old('payrolltype_id')); ?>">
								<option value="0">All</option>
								<option value="1">Rata</option>
								<option value="2">Magna Carta</option>
							</select>
						</div>
				    </div>
					<button class="ui mini button" type="submit">Filter</button>
					<a href="<?php echo e(url('payroll')); ?>" class="ui mini button">Clear</a>
				</form>
			</div>
		</div>
		<table class="ui teal table">
			<thead>
				<tr>
					<th>
						Id
					</th>
					<th>
						Title
					</th>
					<th>
						Payroll Type
					</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payroll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td>
						<?php echo e($payroll->id); ?>

					</td>
					<td>
						<?php echo e($payroll->title); ?>

					</td>
					<td>
						<?php echo e($payroll->Payrolltype->payrolltype); ?>

					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
			<tfoot>
				<tr>
					<th colspan="4">
						 <?php echo e($data->links('vendor.pagination.default')); ?>		
					</th>
				</tr>
			</tfoot>
		</table>
	</div>	
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
    $('.ui.accordion').accordion();
    </script>            
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>