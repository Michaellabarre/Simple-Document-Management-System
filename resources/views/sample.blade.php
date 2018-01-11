@extends('layouts.base')

@section('header')
<div class="ui grid">
  	<div class="sixteen wide column">
	  	<div class="ui teal inverted segment" > <!-- style="background-color: #F7B34D" -->
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
<div class="ui grid" id="sample" >
	<div class="sixteen wide column">
		<div class="ui teal segment">
			<div class="ui form">
				<div class="field">
				    <label>First Name</label>
				    <input ref="firstname" name="first-name" placeholder="First Name" type="number" v-model="form.firstname"  v-bind:value="value" v-on:input="updateValue($event.target.value)" v-on:focus="selectAll" v-on:blur="formatValue">
			  	</div>
			  	<div class="field">
				    <label>Last Name</label>
				    <input ref="lastname"  name="last-name" placeholder="Last Name" type="number" v-model="form.lastname" v-bind:value="value" v-on:input="updateValue($event.target.value)" v-on:focus="selectAll" v-on:blur="formatValue">
			 	</div>
			   	<div class="field">
				    @{{ fullname }}
			  	</div>
			  <div @click="addLine"  class="ui button" type="submit">Add</div>
			  <div @click="updateline(product)"  class="ui button" type="submit">Update</div>
			</div>
		</div>
	</div>

	<div class="sixteen wide column">
		<table class="ui celled table">
		    <thead>
		        <tr>
		            <th>First Name</th>
		            <th>Last Name</th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr v-for="product in form.products">
		            <td>
		                <input class="table-control" v-model="product.firstname">
		            </td>
		            <td>
		                <input type="text" class="table-control"  v-model="product.lastname">
		            </td>
		            <td>
		                <span @click="editline(product)" class="ui button">-</span>
		            </td>
		            <td>
		                <span @click="removeline(product)" class="ui button">&times;</span>
		            </td>
		        </tr>
		    </tbody>
		</table>
	</div>
</div>
@stop
@section('scripts')
  <script type="text/javascript" src="{{ asset('/js/currency-validator.js')}}"></script>
    <script type="text/javascript">
       // Vue.http.headers.common['X-CSRF-TOKEN'] = '{{csrf_token()}}';
        window._form = {
        	firstname: '',
            lastname: '',
            products: []
        };
    </script>            
    <script type="text/javascript" src="{{ asset('js/Controller/app.js')}}"></script>
@stop
