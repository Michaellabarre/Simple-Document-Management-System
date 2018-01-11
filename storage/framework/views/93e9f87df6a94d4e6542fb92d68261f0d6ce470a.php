<div class="ui teal fixed menu" >
  	<div class="ui container">
	    <a href="<?php echo e(url('/dashboard')); ?>" class="item"><i class="home icon" ></i>Home</a>
	    <?php if(Auth::check()): ?>
        <?php if(auth()->user()->isAccountingstaff()): ?>
	    	<a href="<?php echo e(url('/payroll')); ?>" class="item"></i>Payroll</a>
	    <?php endif; ?>
        <?php endif; ?>
        <?php if(Auth::check()): ?>
        <?php if(auth()->user()->isAccountingstaff()): ?>
	    	<a href="<?php echo e(url('/deposit')); ?>" class="item">Deposit</a>
	    <?php endif; ?>
        <?php endif; ?>
	    <div class="ui dropdown item">
		    Manage Libraries
		    <i class="dropdown icon"></i>
		    <div class="menu">
		    	<?php if(Auth::check()): ?>
       			<?php if(auth()->user()->isAccountingstaff()): ?>
					<!-- <a href="<?php echo e(url('/managelibraries/employee')); ?>" class="item">Employees</a> -->
		    		<a href="<?php echo e(url('/managelibraries/otherincomecode')); ?>" class="item">Other Income Code</a>
		    	<?php endif; ?>
                <?php endif; ?>		    	
		    	<?php if(Auth::check()): ?>
                <?php if(auth()->user()->isAdmin()): ?>
		    		<a href="<?php echo e(url('/managelibraries/user')); ?>" class="item">Users</a>
		    	<?php endif; ?>
                <?php endif; ?>
		    </div>
	  	</div>
	  	<div class="ui dropdown item">
		    Report Generation
		    <i class="dropdown icon"></i>
		    <div class="menu">
		    	<?php if(Auth::check()): ?>
       			<?php if(auth()->user()->isAccountingstaff()): ?>
		    		<!-- <a href="<?php echo e(url('/report/disbursment')); ?>" class="item">Disbursement Report</a> -->
		    	<?php endif; ?>
                <?php endif; ?>		    	
		    </div>
	  	</div>
	  	<div class="right menu">
	  		<div class="ui dropdown item">
		    <i class="sidebar icon" ></i>
		    <div class="menu">
		    	<a href="<?php echo e(url('/profile')); ?>" class="item"><i class="setting icon"></i>Account Settings</a>
		    	<a href="<?php echo e(url('/logout')); ?>" class="item"><i class="podcast icon"></i>Log Out</a>
		    </div>
	  	</div>
	      	
    	</div>
	</div>
</div>

