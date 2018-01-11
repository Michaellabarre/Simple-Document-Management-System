<?php $__env->startSection('header'); ?>
<div class="ui  segment">
	<div class="ui grid">
	  	<div class="sixteen wide column">
		  	<div class="ui teal  segment" > <!-- style="background-color: #F7B34D" -->
				<h1 class="ui header" > <!-- style="color: #F6F6F6" -->
				    <i class="home icon" ></i>
				    <div class="content" >
				      Home
				    </div>
				</h1>
			</div>
	  	</div>
	</div>
	<?php $__env->stopSection(); ?>
	<?php $__env->startSection('content'); ?>
	<div class="ui grid">
		<div class="four wide column">
			<div class="ui card">
			  	<div class="ui medium image">
			   		<img src="<?php echo e(asset('/avatar/'.Auth::user()->profile)); ?>">
			  	</div>
				<div class="content">
				  	<div class="sixteen wide column">
					    <a class="header"><?php echo e(Auth::user()->first_name ." ".Auth::user()->last_name); ?></a>
					    <div class="meta">
					        <span class="date">Joined in <?php echo e(Auth::user()->created_at); ?></span>
					    </div>
<!-- 					    <div class="description">
					    	Actor
					    </div> -->
				  	</div>

				</div>
			</div>
		</div>
		<div class="seven wide column">
			<div class="ui  segment">
				<div class="ui link three doubling cards">

				</div>
			</div> 
		</div>

		<div class="five wide column">
			<div class="ui card">
			  <div class="column">
			    <div class="ui raised segment">
			      	<a class="ui blue ribbon label">Downloadable Form</a>
			   		<p></p>
			      	<a  href="<?php echo e(url('/payroll/downloadform')); ?>" class="item">Payroll Form</a>
	
			    </div>
			</div>
			</div>
			<div class="ui card">
			  <div class="column">
			    <div class="ui raised segment">
			      	<a class="ui red ribbon label">Employee W/O Account Number</a>
			   		<p></p>
			   		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td>
							<?php echo e($employee->lastname  . " " .  $employee->firstname); ?> 
						</td>
						<?php if(auth()->user()->isAccountingstaff()): ?>
						<td>
							<a href="<?php echo e(route('employee.edit', [$employee->id])); ?>">
								<i class="edit link icon"></i>
							</a>
						</td>
						<?php endif; ?>
					</tr>
					</br>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			    </div>
			  </div>
			</div>

		</div>
	</div>
	<?php $__env->stopSection(); ?>
</div>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>