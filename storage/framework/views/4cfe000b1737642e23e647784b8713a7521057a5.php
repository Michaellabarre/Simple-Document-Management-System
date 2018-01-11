<?php $__env->startSection('header'); ?>
	<div class="ui segment">
		<h2 class="ui header">
		    <i class="money icon"></i>
		    <div class="content">
		      Budget Items
		      <div class="sub header">Add Budget Item</div>
		    </div>
		  </h2>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<div class="ui segment">
		<form action="<?php echo e(route('budgetitems.store')); ?>" class="ui form" method="post">
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<div class="field">
				<label>Budget Item</label>
				<div class="field">
					<input type="text" name="budgetitem" placeholder="Enter the Budget Item" value="<?php echo e(old('budgetitem')); ?>">
				</div>
			</div>
			<div class="field">
				<label>Status</label>
				<select class="ui dropdown"  name="isactive" value="<?php echo e(old('isactive')); ?>">
					<option value="1">Active</option>
					<option value="0">InActive</option>
				</select>
			</div>

			<button class="ui blue button" type="submit">Submit</button>
			<a href="<?php echo e(url('budgetitems')); ?>" class="ui red button">Cancel</a>
	 	</form>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
	<script type="text/javascript">
		$('.ui.dropdown').dropdown().dropdown("set selected", "<?php echo e(old('isactive')); ?>");;
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>