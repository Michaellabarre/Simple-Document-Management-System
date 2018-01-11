<?php $__env->startSection('header'); ?>
<div class="ui segment">
	<div class="ui grid">
		  <div class="four column row">
		    <div class="left floated column">
		    	<div class="column">
					<h2 class="ui header">
					    <div class="right content">
					     Manage Deposit
					    </div>
					</h2>
		  		</div>
		    </div>
		    <div class="right floated column">
		    	<a class="ui mini basic black  right floated button" href="<?php echo e(route('deposit.create')); ?>">
				<i class="icon add"></i>
					Add Deposit
				</a>
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
				<form  class="ui mini form" action="<?php echo e(url('deposit.search')); ?>" method="get">
					<div class="two fields">
						<div class="field">
							<input type="text" placeholder="Search" name="search" value="<?php echo e(Request::get('search')); ?>">
						</div>
						<div class="field">				
							<select class="ui search selection dropdown" name="fund_id" value="<?php echo e(old('fund_id')); ?>">
								<option value="0">All</option>
								<?php $__currentLoopData = $Payrolltypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Payrolltype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($Payrolltype->id); ?>"><?php echo e($Payrolltype->payrolltype); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
				    </div>
					<button class="ui mini basic black button" type="submit">Filter</button>
					<a href="<?php echo e(url('deposit')); ?>" class="ui mini basic black button">Clear</a>
				</form>
			</div>
		</div>
		<table class="ui  table">
			<thead>
				<tr>
					<th>
						Id
					</th>
					<th>
						Deposit Number
					</th>
					<th>
						Deposit Date
					</th>
					<th>
						Net Amount
					</th>
					<th>
						Action
					</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if($deposit->isactive == 0): ?>
				<tr style="background-color:#FF7661;color:white;font-weight: bold" >
				<?php else: ?>
				<tr>
				<?php endif; ?>
					<td>
						<?php echo e($deposit->id); ?>

					</td>
					<td>
						<?php echo e($deposit->deposit_number); ?>

					</td>
					<td>
						<?php echo e(date('M-d-Y', strtotime($deposit->deposit_date))); ?>

					</td>
					<td>
						<?php echo e($deposit->net_amount); ?>

					</td>
					<td>
						<a href="<?php echo e(route('deposit.edit', [$deposit->id])); ?>">
							<i class="edit link icon"></i>
						</a>
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