@extends('layouts.base')
@section('header')
	<div class="ui segment">
		<h2 class="ui header">
		    <i class="money icon"></i>
		    <div class="content">
		      Manage Payroll 
		      <div class="sub header">Update Deposit </div>
		  </h2>
	</div>
@stop
@section('content')
	<div class="ui segment" id="app">
		<form action="{{ route('deposit.update', [$data['id']]) }}" class="ui mini form" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="_method" value="PUT">
			<div class="two fields">
				<div class="field">
					<label>Deposit Number:</label>
					<div class="field">
						<input type="text" name="deposit_number" placeholder="Enter the Deposit Number"  value="{{ $data->deposit_number  }}">
					</div>
				</div>
				<div class="field">
					<label>Payment Date</label>
					<input class="flatpickr"  name="deposit_date" type="text" placeholder="Select Date.."  value="{{ $data->deposit_date  }}">
				</div>
			</div>
			<div class="two fields">
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
						<currency-input v-model="Netamount" ></currency-input>
					</div>
				</div>
			</div>
			<button class="ui mini basic black button" type="submit">Submit</button>
			<a href="{{ url('deposit') }}" class="ui mini basic black button">Cancel</a>
	 	</form>
	</div>
@stop
@section('scripts')
	<script type="text/javascript" src="{{ asset('js/currency-validator.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/Controller/new_entry.js')}}"></script>
	<script type="text/javascript">
		$('#isactive').dropdown("set selected", "{{ $data['isactive'] }}");
		$('#payrolltype_id').dropdown('set selected',"{{ $data['payrolltype_id'] }}");
		document.getElementById("net_amount").value ="{{ $data['net_amount'] }}";
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
