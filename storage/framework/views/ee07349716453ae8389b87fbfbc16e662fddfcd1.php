<?php $__env->startSection('header'); ?>
	<div class="ui segment">
		<h2 class="ui header">
		    <div class="content">
		      Manage User
		      <div class="sub header">Add User</div>
		    </div>
		  </h2>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<div class="ui segment">
		<form action="<?php echo e(route('signup')); ?>" class="ui form" method="post">
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<div class="field">
				<label>Firstname</label>
				<div class="field">
					<input type="text" name="first_name" placeholder="Enter the First Name" value="<?php echo e(old('first_name')); ?>">
				</div>
			</div>
			<div class="field">
				<label>Lastname</label>
				<div class="field">
					<input type="text" name="last_name" placeholder="Enter Last Name" value="<?php echo e(old('last_name')); ?>">
				</div>
			</div>
			<div class="field">
				<label>MI</label>
				<div class="field">
					<input type="text" name="middle_initial" placeholder="Enter Last Name" value="<?php echo e(old('middle_initial')); ?>">
				</div>
			</div>
			<div class="field">
				<label>Username</label>
				<div class="field">
					<input type="text" name="username" placeholder="Enter Username" value="<?php echo e(old('username')); ?>">
				</div>
			</div>
			<div class="field">
				<label>Password</label>
				<div class="field">
					<input type="password" name="password" placeholder="Enter Password" value="<?php echo e(old('password')); ?>">
				</div>
			</div>
			<div class="ui horizontal divider">
				Role
			</div>
			<div class="inline field">
			    <div class="ui checkbox">
			      <input tabindex="0" name="role_admin" class="hidden" type="checkbox">
			      <label>Admin</label>
			    </div>
			</div>
			<div class="inline field">
			    <div class="ui checkbox">
			      <input tabindex="0" class="hidden" name="role_accountingstaff"  type="checkbox">
			      <label>Accounting Staff</label>
			    </div>
			</div>

			<button class="ui mini basic black button" type="submit">Submit</button>
			<a href="<?php echo e(url('managelibraries/user')); ?>" class="ui mini basic black button">Cancel</a>
	 	</form>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
	<script type="text/javascript">
		$('.ui.dropdown').dropdown().dropdown("set selected", "<?php echo e(old('isactive')); ?>");;
		$('.ui.checkbox').checkbox();
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>