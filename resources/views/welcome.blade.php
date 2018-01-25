@extends('layouts.base')
@section('content')
  	<div class="row">
        <div class="sixteen wide column">
            <div class="ui segments">
                <div class="ui segment">
                    <h5 class="ui header">
                       	New Document
                    </h5>
                </div>
                <div class="ui segment">
                    <div class="ui input">
                        <input placeholder="Basic..." type="text">
                    </div>


                    <div class="ui disabled input">
                        <input placeholder="Disabled..." type="text">
                    </div>

                    <div class="ui disabled icon input">
                        <i class="search icon"></i>
                        <input placeholder="Search Disabled..." type="text">
                    </div>

                    <div class="ui input error">
                        <input placeholder="Error..." type="text">
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
