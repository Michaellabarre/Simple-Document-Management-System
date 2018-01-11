<div class="ui teal fixed menu" >
  	<div class="ui container">
	    <a href="{{ url('/dashboard') }}" class="item"><i class="home icon" ></i>Home</a>
	    @if (Auth::check())
        @if (auth()->user()->isAccountingstaff())
	    	<a href="{{ url('/payroll') }}" class="item"></i>Payroll</a>
	    @endif
        @endif
        @if (Auth::check())
        @if (auth()->user()->isAccountingstaff())
	    	<a href="{{ url('/deposit') }}" class="item">Deposit</a>
	    @endif
        @endif
	    <div class="ui dropdown item">
		    Manage Libraries
		    <i class="dropdown icon"></i>
		    <div class="menu">
		    	@if (Auth::check())
       			@if (auth()->user()->isAccountingstaff())
					<!-- <a href="{{ url('/managelibraries/employee') }}" class="item">Employees</a> -->
		    		<a href="{{ url('/managelibraries/otherincomecode') }}" class="item">Other Income Code</a>
		    	@endif
                @endif		    	
		    	@if (Auth::check())
                @if (auth()->user()->isAdmin())
		    		<a href="{{ url('/managelibraries/user') }}" class="item">Users</a>
		    	@endif
                @endif
		    </div>
	  	</div>
	  	<div class="ui dropdown item">
		    Report Generation
		    <i class="dropdown icon"></i>
		    <div class="menu">
		    	@if (Auth::check())
       			@if (auth()->user()->isAccountingstaff())
		    		<!-- <a href="{{ url('/report/disbursment') }}" class="item">Disbursement Report</a> -->
		    	@endif
                @endif		    	
		    </div>
	  	</div>
	  	<div class="right menu">
	  		<div class="ui dropdown item">
		    <i class="sidebar icon" ></i>
		    <div class="menu">
		    	<a href="{{ url('/profile') }}" class="item"><i class="setting icon"></i>Account Settings</a>
		    	<a href="{{ url('/logout') }}" class="item"><i class="podcast icon"></i>Log Out</a>
		    </div>
	  	</div>
	      	
    	</div>
	</div>
</div>

