@extends('layouts.base')
@section('header')
	<div class="ui segment">
		<h2 class="ui header">
		    <div class="content">
		    	Manage Employee
		      <div class="sub header">Edit Employee</div>
		    </div>
	    </h2>
	</div>
@stop

@section('content')
	<div class="ui segment">
		<form action="{{ route('employee.update', [$data['id']]) }}" class="ui form" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="_method" value="PUT">
			<div class="field">
				<label>Employee Id</label>
				<div class="field">
					<input type="text" name="employee_id" placeholder="Enter the Employee Id" value="{{ $data['employee_id'] }}">
				</div>
			</div>
			<div class="field">
				<label>First Name</label>
				<div class="field">
					<input type="text" name="firstname" placeholder="Enter the First Name" value="{{ $data['firstname'] }}">
				</div>
			</div>
			<div class="field">
				<label>Last Name</label>
				<div class="field">
					<input type="text" name="lastname" placeholder="Enter the Last Name" value="{{ $data['lastname'] }}">
				</div>
			</div>
			<div class="field">
				<label>Account Number</label>
				<div class="field">
					<input type="text" name="account_number" placeholder="Enter the Account Code" value="{{ $data['account_number'] }}">
				</div>
			</div>
			<div class="field">
				<label>Status</label>
				<select class="ui dropdown"  name="isactive"  value="{{ $data['isactive'] }}">
					<option value="1">Active</option>
					<option value="0">InActive</option>
				</select>
			</div>
			<button class="ui mini basic black button" type="submit">Update</button>
			<a href="{{ url('managelibraries/employee') }}" class="ui mini basic black button">Cancel</a>
	 	</form>
 	</div>
@stop
@section('scripts')
	<script type="text/javascript">
		$('.ui.dropdown').dropdown("set selected", "{{ $data['isactive'] }}");
	</script>
@stop