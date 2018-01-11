@extends('layouts.base')
@section('header')
	<div class="ui segment">
		<h2 class="ui header">
		    <div class="content">
		      Manage Other Income Code
		      <div class="sub header">Add Other Income Code</div>
		    </div>
		  </h2>
	</div>
@stop
@section('content')
	<div class="ui segment">
		<form action="{{ route('otherincomecode.store') }}" class="ui form" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="field">
				<label>Other Income Code</label>
				<div class="field">
					<input type="text" name="payrolltype" placeholder="Enter the Other Income Code" value="{{ old('payroll') }}">
				</div>
			</div>
			<div class="field">
				<label>Status</label>
				<select class="ui dropdown"  name="isactive" value="{{ old('isactive') }}">
					<option value="1">Active</option>
					<option value="0">InActive</option>
				</select>
			</div>
			<button class="ui mini basic black button" type="submit">Submit</button>
			<a href="{{ url('managelibraries/otherincomecode') }}" class="ui mini basic black button">Cancel</a>
	 	</form>
	</div>
@stop
@section('scripts')
	<script type="text/javascript">
		$('.ui.dropdown').dropdown().dropdown("set selected", "{{ old('isactive') }}");;
	</script>
@stop