@extends('layouts.base')
@section('header')
<div class="ui segment">
	<div class="ui grid">
		  <div class="four column row">
		    <div class="left floated column">
		    	<div class="column">
					<h2 class="ui header">
					    <div class="right content">
					     Manage Payroll
					    </div>
					</h2>
		  		</div>
		    </div>
		    <div class="right floated column">
		    	<a class="ui mini basic black  right floated button" href="{{ route('payroll.create') }}">
				<i class="icon add"></i>
					Add Payroll
				</a>
		    </div>
		  </div>
 	</div>	
</div>
@stop
@section('content')
	<div class="ui segment">
		<div class="ui styled fluid accordion">
			<div class="title">
		    	<i class="dropdown icon"></i>
		    	Search
		  	</div>
		  	<div class="content">
				<form  class="ui mini form" action="{{ url('payroll.search') }}" method="get">
					<div class="two fields">
						<div class="field">
							<input type="text" placeholder="Search" name="search" value="{{ Request::get('search') }}">
						</div>
						<div class="field">				
							<select class="ui search selection dropdown" name="fund_id" value="{{ old('fund_id') }}">
								<option value="0">All</option>
								@foreach($Payrolltypes as $Payrolltype)
								<option value="{{ $Payrolltype->id }}">{{ $Payrolltype->payrolltype }}</option>
								@endforeach
							</select>
						</div>
				    </div>
					<button class="ui mini basic black button" type="submit">Filter</button>
					<a href="{{ url('payroll') }}" class="ui mini basic black button">Clear</a>
				</form>
			</div>
		</div>
		<table class="ui  table">
			<thead>
				<tr>
					<th>
						Id
					</th>
					<th>
						Payee
					</th>
					<th>
						Payment Date
					</th>
					<th>
						Particular
					</th>
					<th>
						Net Amount
					</th>
					<th>
						Action
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $payroll)
				@if($payroll->isactive == 0)
				<tr style="background-color:#FF7661;color:white;font-weight: bold" >
				@else
				<tr>
				@endif
					<td>
						{{ $payroll->id }}
					</td>
					<td>
						{{ $payroll->payee }}
					</td>
					<td>
						{{ date('M-d-Y', strtotime($payroll->payment_date))  }}
					</td>
					<td>
						{{ $payroll->particular }}
					</td>
					<td>
						{{ $payroll->net_amount }}
					</td>
					<td>
						<a href="{{ route('payroll.edit', [$payroll->id]) }}">
							<i class="edit link icon"></i>
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
			<tfoot>
				<tr>
					<th colspan="4">
						 {{ $data->links('vendor.pagination.default') }}		
					</th>
				</tr>
			</tfoot>
		</table>
	</div>	
@stop
@section('scripts')
    <script type="text/javascript">
    $('.ui.accordion').accordion();
    </script>            
@stop