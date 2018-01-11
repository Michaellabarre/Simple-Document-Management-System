<?php $__env->startSection('header'); ?>
	<div class="ui segment">
		<h2 class="ui header">
		    <div class="content">
		    	Manage Other Income Code
		    	<div class="sub header">Edit Other Income Code</div>
		    </div>
	    </h2>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="ui segment">
		<form action="<?php echo e(route('user.update', [$data['id']])); ?>" class="ui form" method="post">
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<input type="hidden" name="_method" value="PUT">
			<div class="field">
				<label>First Name</label>
				<div class="field">
					<input type="text" name="first_name" placeholder="Enter the Other Income Code" value="<?php echo e($data['first_name']); ?>">
				</div>
			</div>
			<div class="field">
				<label>Last Name</label>
				<div class="field">
					<input type="text" name="last_name" placeholder="Enter the Other Income Code" value="<?php echo e($data['last_name']); ?>">
				</div>
			</div>
			<div class="field">
				<label>MI</label>
				<div class="field">
					<input type="text" name="middle_initial" placeholder="Enter the Other Income Code" value="<?php echo e($data['middle_initial']); ?>">
				</div>
			</div>
			<div class="field">
				<label>Username</label>
				<div class="field">
					<input type="text" name="username" placeholder="Enter the Other Income Code" value="<?php echo e($data['username']); ?>">
				</div>
			</div>
			<div class="field">
				<label>Password</label>
				<div class="field">
					<input type="password" name="password" >
				</div>
			</div>
			<div class="ui horizontal divider">
				Role
			</div>
			<div class="inline field">
			    <div class="ui checkbox">
			      <input id="role_admin"  tabindex="0" name="role_admin" class="hidden" type="checkbox">
			      <label>Admin</label>
			    </div>
			</div>
			<div class="inline field">
			    <div class="ui checkbox">
			      <input id="role_accountingstaff" tabindex="0" class="hidden" name="role_accountingstaff"  type="checkbox">
			      <label>Accounting Staff</label>
			    </div>
			</div>

			<div class="field">
				<label>Status</label>
				<select class="ui dropdown"  name="isactive"  value="<?php echo e($data['isactive']); ?>">
					<option value="1">Active</option>
					<option value="0">InActive</option>
				</select>
			</div>
			<button class="ui mini basic black button" type="submit">Update</button>
			<a href="<?php echo e(url('managelibraries/user')); ?>" class="ui mini basic black button">Cancel</a>
	 	</form>
 	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<script type="text/javascript">
		$('.ui.dropdown').dropdown("set selected", "<?php echo e($data['isactive']); ?>");
		
		document.getElementById("role_admin").checked = "<?php echo e($data->hasRole('Admin')); ?>";
		document.getElementById("role_accountingstaff").checked = "<?php echo e($data->hasRole('AccountingStaff')); ?>";
		$('.ui.checkbox').checkbox();
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>