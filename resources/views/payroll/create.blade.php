@extends('layouts.base')
@section('header')
	<div class="ui segment">
		<h2 class="ui header">
		    <div class="content">
		    	Manage Payroll
		    	<div class="sub header">New Payroll</div>
		    </div>
		  </h2>
	</div>
@stop
@section('content')
	<div class="ui segment" id="app">
		<form action="{{ route('payroll.store') }}" class="ui mini form" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="field">
				<label>Payee:</label>
				<div class="field">
					<input type="text" name="payee" placeholder="Enter the Payee" value="{{ old('payee') }}">
				</div>
			</div>
			<div class="three fields">
				<div class="field">
					<label>Fund:</label>
					<select name="fund_id" id="fund_id" class="ui search selection dropdown" name="fund_id">
						@foreach($Payrolltypes as $Payrolltype)
						<option value="{{ $Payrolltype->id }}">{{ $Payrolltype->payrolltype }}</option>
						@endforeach
					</select>
				</div>
				<div class="field">
					<label>Net Amount:</label>
					<div class="field">
						<currency-input  v-model="Netamount" name="net_amount"></currency-input>
					</div>
				</div>
				<div class="field">
					<label>Payment Date</label>
					<input class="flatpickr"  name="payment_date" type="text" placeholder="Select Date.." >
				</div>
			</div>
			<div class="field">
				<label>Particular</label>
				<div class="field">
					<input type="text" name="particular" placeholder="Enter the Particular" value="{{ old('particular') }}">
				</div>
			</div>

			<button class="ui mini basic black button" type="submit">Submit</button>
			<a href="{{ url('payroll') }}" class="ui mini basic black button">Cancel</a>
				<div class="field">

	</div>
	 	</form>
	</div>
@stop
@section('scripts')
	<script type="text/javascript" src="{{ asset('js/currency-validator.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/Controller/new_entry.js')}}"></script>
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
@stop
