<?php $__env->startSection('header'); ?>
<div class="ui grid">
  	<div class="sixteen wide column">
	  	<div class="ui teal inverted segment" > <!-- style="background-color: #F7B34D" -->
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
		   		<img src="<?php echo e(asset('img/profile.png')); ?>">
		  	</div>
			<div class="content">
			  	<div class="sixteen wide column">
				    <a class="header">Saitama</a>
				    <div class="meta">
				        <span class="date">Joined in 2013</span>
				    </div>
				    <div class="description">
				    	Super Hero
				    </div>
			  	</div>
			  	<div class="extra content">
				    <a>
				     	<i class="user icon"></i>
				    	22 Friends
				    </a>
			  	</div>
			</div>
		</div>


		<div class="ui card">

			<div class="content">
			  	<div class="sixteen wide column">
				    <a class="header">Group</a>
		
			  	</div>

			</div>
		</div>
	</div>

	<div class="seven wide column">
		<div class="ui  segment">
			<div class="ui link three doubling cards">
			  <div class="card">
			    <div class="image">
			    	<img src="<?php echo e(asset('img/PPMP.png')); ?>">
			    </div>
			  </div>
			  <div class="card">
			  	<div class="image">
			    	<img src="<?php echo e(asset('img/APP.png')); ?>">
			    </div>
			  </div>
			  <div class="card">
			    <div class="image">
			      <img src="<?php echo e(asset('img/Procurement.png')); ?>">
			    </div>
			  </div>
			  <div class="card">
			    <div class="image">
			      <img src="<?php echo e(asset('img/Managelibraries.png')); ?>">
			    </div>
			  </div>
			  <div class="card">
			    <div class="image">
			      <img src="<?php echo e(asset('img/ReportGeneration.png')); ?>">
			    </div>
			  </div>
			<!--   <div class="card">
			    <div class="image">
			      	<img src="<?php echo e(asset('img/ReportGeneration.png')); ?>">
			    </div>
			  </div>
			    <div class="card">
			    <div class="image">
			      	<img src="<?php echo e(asset('img/ReportGeneration.png')); ?>">
			    </div>
			  </div>
			  <div class="card">
			    <div class="image">
			      	<img src="<?php echo e(asset('img/ReportGeneration.png')); ?>">
			    </div>
			  </div>
			  <div class="card">
			    <div class="image">
			      	<img src="<?php echo e(asset('img/ReportGeneration.png')); ?>">
			    </div>
			  </div> -->
			</div>
		</div>
	</div>

	<div class="five wide column">
		<div class="ui card">
		  <div class="content">
		  	<div class="sixteen wide column">
		  		<h5 class="ui blue header">Notification</h5>
		  	</div>
		  	<div class="ui hidden divider"></div>
		    <div class="ui description">
		      Kristy is an art director living in New York.
		    </div>
		  </div>
		</div>

		<div class="ui card">
		  <div class="content">
		  	<div class="sixteen wide column">
		  		<h5 class="ui blue header">Announcement</h5>
		  	</div>
		  	<div class="ui hidden divider"></div>
		    <div class="ui description">
		      Kristy is an art director living in New York.
		    </div>
		  </div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>