<?php $__env->startSection('header'); ?>
	<div class="ui segment">
		<h2 class="ui header">
		    <div class="content">
		    	Manage Deposit
		    	<div class="sub header">New Deposit</div>
		    </div>
		  </h2>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<div class="ui segment" id="app">
		<form action="<?php echo e(route('deposit.store')); ?>" class="ui mini form" method="post">
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<div class="two fields">
				<div class="field">
					<label>Deposit Number:</label>
					<div class="field">
						<input type="text" name="deposit_number" placeholder="Enter the Deposit Number" value="<?php echo e(old('deposit_number')); ?>">
					</div>
				</div>
				<div class="field">
					<label>Deposit Date</label>
					<input class="flatpickr"  name="deposit_date" type="text" placeholder="Select Date.." >
				</div>
			</div>
			<div class="two fields">
				<div class="field">
					<label>Fund:</label>
					<select name="fund_id" id="fund_id" class="ui search selection dropdown" name="fund_id">
						<?php $__currentLoopData = $Payrolltypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Payrolltype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($Payrolltype->id); ?>"><?php echo e($Payrolltype->payrolltype); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
				</div>
				<div class="field">
					<label>Net Amount:</label>
					<div class="field">
						<currency-input  v-model="Netamount"></currency-input>
					</div>
				</div>

			</div>

			<button class="ui mini basic black button" type="submit">Submit</button>
			<a href="<?php echo e(url('deposit')); ?>" class="ui mini basic black button">Cancel</a>
				<div class="field">

	</div>
	 	</form>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
	<script type="text/javascript" src="<?php echo e(asset('js/currency-validator.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('js/Controller/new_entry.js')); ?>"></script>
	<script type="text/javascript">
		window._form = {
  			timein:'',
  			timeend:''
        };
	    window.onload = function(){
	        flatpickr(".flatpickr", {
	          altInput: true,
	          altFormat: "F j, Y "
	        });

	        flatpickr(".flatpickrtime", {
		        enableTime: true,
			    noCalendar: true,
			    enableSeconds: false, 
			    time_24hr: false, 
			    dateFormat: "h:i K", 
			    defaultHour: 12,
			    defaultMinute: 0
	        });
      	};
	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>