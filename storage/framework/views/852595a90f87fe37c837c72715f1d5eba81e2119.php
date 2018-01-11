

<?php $__env->startSection('header'); ?>
	<div class="ui segment">
		<h2 class="ui header">
		    <i class="money icon"></i>
		    <div class="content">
		      PPMP
		      <div class="sub header">Add PPMP</div>
		    </div>
		  </h2>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<div class="ui  black segment">
		<form action="<?php echo e(route('funds.store')); ?>" class="ui form" method="post">
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<div class="field">
			    <div class="two fields">		    
			     	<div class="field">
			      		<label>Year</label>
			        	<input name="shipping[first-name]" placeholder="First Name" type="text">
			     	 </div>
			      	<div class="field">
				      	<label>EndUser</label>
				        <input name="shipping[last-name]" placeholder="Last Name" type="text">
			      </div>
			    </div>
			</div>
			<div class="field">
			    <div class="two fields">
			     	<div class="field">
			      		<label>Operating Program</label>
			        	<input name="shipping[first-name]" placeholder="First Name" type="text">
			     	 </div>
			      	<div class="field">
				      	<label>Mode of Procurement</label>
				        <input name="shipping[last-name]" placeholder="Last Name" type="text">
			      </div>
			    </div>
			</div>
			<div class="uifield">
			    <div class="three fields">
			     	<div class="field">
			      		<label>Category</label>
			        	<input name="shipping[first-name]" placeholder="First Name" type="text">
			     	 </div>
			      	<div class="field">
				      	<label>Fund</label>
				        <input name="shipping[last-name]" placeholder="Last Name" type="text">
			      	</div>
			      	<div class="field">
				      	<label>Code</label>
				        <input name="shipping[last-name]" placeholder="Last Name" type="text">
			      	</div>
			    </div>
			</div>
			<div class="field">
				<label>General Description</label>
				<div class="field">
					<input type="text" name="fundcode" placeholder="Enter the fund code" value="<?php echo e(old('fundcode')); ?>">
				</div>
			</div>
			<div class="field">
			    <div class="two fields">
			     	<div class="field">
			      		<label>Quantity</label>
			        	<input name="shipping[first-name]" placeholder="First Name" type="text">
			     	 </div>
			      	<div class="field">
				      	<label>Estimated Budget</label>
				        <input name="shipping[last-name]" placeholder="Last Name" type="text">
			      </div>
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
			<a href="<?php echo e(url('funds')); ?>" class="ui red button">Cancel</a>
	 	</form>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
	<script type="text/javascript">
		$('.ui.dropdown').dropdown().dropdown("set selected", "<?php echo e(old('isactive')); ?>");;
	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>