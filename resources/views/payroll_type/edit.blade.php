@extends('layouts.base')

@section('header')
	<div class="ui segment">
		<h2 class="ui header">
		    <div class="content">
		    	Manage Other Income Code
		    	<div class="sub header">Edit Other Income Code</div>
		    </div>
	    </h2>
	</div>
@stop

@section('content')
	<div class="ui segment">
		<form action="{{ route('otherincomecode.update', [$data['id']]) }}" class="ui form" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="_method" value="PUT">
			<div class="field">
				<label>Other Income Code</label>
				<div class="field">
					<input type="text" name="payrolltype" placeholder="Enter the Other Income Code" value="{{ $data['payrolltype'] }}">
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
			<a href="{{ url('managelibraries/otherincomecode') }}" class="ui mini basic black button">Cancel</a>
	 	</form>
 	</div>
@stop

@section('scripts')
	<script type="text/javascript">
		$('.ui.dropdown').dropdown("set selected", "{{ $data['isactive'] }}");
	</script>
@stop