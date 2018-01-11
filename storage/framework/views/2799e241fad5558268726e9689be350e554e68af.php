<?php $__env->startSection('header'); ?>
	<div class="ui segment">
		<h2 class="ui header">
		    <i class="truck icon"></i>
		    <div class="content">
		      Funds
		      <div class="sub header">Edit Fund</div>
		    </div>
	    </h2>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="ui segment">
		<form action="<?php echo e(route('funds.update', [$data['id']])); ?>" class="ui form" method="post">
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<input type="hidden" name="_method" value="PUT">
			<div class="field">
				<label>Name</label>
				<div class="field">
					<input type="text" name="fundcode" placeholder="Enter the Fundcode" value="<?php echo e($data['fundcode']); ?>">
				</div>
			</div>
			<div class="field">
				<label>Status</label>
				<select class="ui dropdown"  name="isactive"  value="<?php echo e($data['isactive']); ?>">
					<option value="1">Active</option>
					<option value="0">InActive</option>
				</select>
			</div>
			<button class="ui button" type="submit">Update</button>
			<a href="<?php echo e(url('funds')); ?>" class="ui red button">Cancel</a>
	 	</form>
 	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<script type="text/javascript">
		$('.ui.dropdown').dropdown("set selected", "<?php echo e($data['isactive']); ?>");
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>