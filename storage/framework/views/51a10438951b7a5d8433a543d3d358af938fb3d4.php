<div class="ui teal fixed menu" >
  	<div class="ui container">
	    <a href="<?php echo e(url('/')); ?>" class="item"><i class="home icon" ></i>Home</a>
	    <a href="<?php echo e(url('/payroll')); ?>" class="item"><i class="browser icon" ></i>Payroll</a>
	    <div class="ui dropdown item">
		    Manage Libraries
		    <i class="dropdown icon"></i>
		    <div class="menu">
		    	<a href="<?php echo e(url('/budgetitems')); ?>" class="item">Payroll Type</a>
		    	<a href="<?php echo e(url('/companies')); ?>" class="item">Users</a>
		    </div>
	  	</div>
	  	<div class="right menu">
	      	<a class="item">Logout</a>
    	</div>
	</div>
</div>

