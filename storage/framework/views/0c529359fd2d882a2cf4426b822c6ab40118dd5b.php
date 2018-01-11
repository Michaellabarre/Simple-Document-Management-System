<?php $__env->startSection('header'); ?>
<div class="ui segment">
	<div class="ui grid">
		  <div class="five column row">
		    <div class="left floated column">
		    	<div class="column">
					<h2 class="ui header">
					    <i class="money icon"></i>

					    <div class="right content">
					      Funds
					      <div class="sub header">Manage Funds</div>
					    </div>
					</h2>
		  		</div>
		    </div>
		    <div class="right floated column">
		    	<a class="ui blue  large button" href="<?php echo e(route('funds.create')); ?>">
				<i class="icon add"></i>
				Add Fund
				</a>
		    </div>
		  </div>
 	</div>	
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<div class="ui styled fluid accordion">
		<div class="title">
	    	<i class="dropdown icon"></i>
	    	Search
	  	</div>
	  	<div class="content">
			<form  class="ui form" action="<?php echo e(url('funds.search')); ?>" method="get">
				<div class="field">
					<input type="text" placeholder="Search" name="search" value="<?php echo e(Request::get('search')); ?>">
				</div>
				<button class="ui button" type="submit">Filter</button>
				<a href="<?php echo e(url('funds')); ?>" class="ui button">Clear</a>
			</form>
		</div>
	</div>
	<table class="ui teal table">
		<thead>
			<tr>
				<th>
					id
				</th>
				<th>
					Fundcode
				</th>
				<th>
					Action
				</th>
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fund): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td>
					<?php echo e($fund->id); ?>

				</td>
				<td>
					<?php echo e($fund->fundcode); ?>

				</td>
				<td>
					<a href="<?php echo e(route('funds.edit', [$fund->id])); ?>">
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
    $('.ui.accordion').accordion();
    </script>            
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>