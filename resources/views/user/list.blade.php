@extends('layouts.base')
@section('header')
<div class="ui segment">
	<div class="ui grid">
		  <div class="three column row">
		    <div class="left floated column">
		    	<div class="column">
					<h2 class="ui header">
					    <div class="right content">
					    	Manage Users
					    </div>
					</h2>
		  		</div>
		    </div>
		    <div class="right floated column">
		    	<a class="ui mini basic black  right floated button" href="{{ route('user.create') }}">
				<i class="icon add"></i>
				Add User
				</a>
		    </div>
		  </div>
 	</div>	
</div>
@stop
@section('content')
	<div class="ui styled fluid accordion">
		<div class="title">
	    	<i class="dropdown icon"></i>
	    	Search
	  	</div>
	  	<div class="content">
			<form  class="ui form"  action="{{ url('user.search') }}" method="get">
				<div class="field">
					<input type="text" placeholder="Search" name="search"  value="{{ Request::get('search') }}" >
				</div>
				<button class="ui mini basic black button" type="submit">Filter</button>
				<a href="{{ url('managelibraries/otherincomecode') }}" class="ui mini basic black button">Clear</a>
			</form>
		</div>
	</div> 
	<table class="ui teal table">
		<thead>
			<tr>
				<th>
					id
				</th>
				<th>
					Firstname
				</th>
				<th>
					Lastname
				</th>
				<th>
					Action
				</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $user)
			<tr>
				<td>
					{{ $user->id }}
				</td>
				<td>
					{{ $user->first_name }}
				</td>
				<td>
					{{ $user->last_name }}
				</td>
				<td>
					<a href="{{ route('user.edit', [$user->id]) }}">
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
@stop
@section('scripts')
    <script type="text/javascript">
    $('.ui.accordion').accordion();
    </script>            
@stop