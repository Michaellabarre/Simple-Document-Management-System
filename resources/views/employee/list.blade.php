@extends('layouts.base')
@section('header')
<div class="ui segment">
	<div class="ui grid">
		  <div class="four column row">
		    <div class="left floated column">
		    	<div class="column">
					<h2 class="ui header">
					    <div class="right content">
					     Manage Employees
					    </div>
					</h2>
		  		</div>
		    </div>
		    <div class="right floated column">
		    <div class="right floated column">
		    	<a class="ui mini basic black  right floated button" href="{{ route('employee.create') }}">
				<i class="icon add"></i>
					Add Employee
				</a>
		    </div>
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
				<form  class="ui form" action="{{ url('employee.search') }}" method="get">
						<div class="field">
							<input type="text" placeholder="Search" name="search" value="{{ Request::get('search') }}">
						</div>
					<button class="ui mini basic black button" type="submit">Filter</button>
					<a href="{{ url('managelibraries/employee') }}" class="ui mini basic black button">Clear</a>
				</form>
			</div>
		</div>
		<table class="ui  table">
			<thead>
				<tr>
					<th>
						Employee Id
					</th>
					<th>
						Lastname
					</th>
					<th>
						Firstname
					</th>
					<th>
						Account Number
					</th>
					<th>
						Action
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $employee)
				<tr>
					<td>
						{{ $employee->employee_id }}
					</td>
					<td>
						{{ $employee->lastname }}
					</td>
					<td>
						{{ $employee->firstname }}
					</td>
					<td>
						{{ $employee->account_number }}
					</td>
					<td>
					<a href="{{ route('employee.edit', [$employee->id]) }}">
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