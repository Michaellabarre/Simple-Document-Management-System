@extends('layouts.base')

@section('header')
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
	@stop
	@section('content')
	<div class="ui grid">
		<div class="four wide column">
			<div class="ui card">
			  	<div class="ui medium image">
			   		<img src="{{ asset('/avatar/'.Auth::user()->profile) }}">
			  	</div>
				<div class="content">
				  	<div class="sixteen wide column">
					    <a class="header">{{ Auth::user()->first_name ." ".Auth::user()->last_name}}</a>
					    <div class="meta">
					        <span class="date">Joined in {{ Auth::user()->created_at }}</span>
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
			      	<a  href="{{ url('/payroll/downloadform') }}" class="item">Payroll Form</a>
	
			    </div>
			</div>
			</div>
			<div class="ui card">
			  <div class="column">
			    <div class="ui raised segment">
			      	<a class="ui red ribbon label">Employee W/O Account Number</a>
			   		<p></p>
			   		@foreach($data as $employee)
					<tr>
						<td>
							{{ $employee->lastname  . " " .  $employee->firstname }} 
						</td>
						@if (auth()->user()->isAccountingstaff())
						<td>
							<a href="{{ route('employee.edit', [$employee->id]) }}">
								<i class="edit link icon"></i>
							</a>
						</td>
						@endif
					</tr>
					</br>
					@endforeach
			    </div>
			  </div>
			</div>

		</div>
	</div>
	@stop
</div>