@extends('layouts.base')
@section('content')
  	<div class="row">
        <div class="sixteen wide column">
            <div class="ui segments">
                <div class="ui segment">
                    <h3 class="ui header">
                        List of Bureaus and Services
                    </h3>
                </div>
                <div class="ui segment">
                    <div class="ui styled fluid accordion">
                            <div class="title">
                                <i class="dropdown icon"></i>
                                Search
                            </div>
                            <div class="content">
                                <form  class="ui form"   method="get">
                                    <div class="field">
                                        <input type="text" placeholder="Search" name="search"  value="{{ Request::get('search') }}" >
                                    </div>
                                    <button class="ui mini basic black button" type="submit">Filter</button>
                                    <a href="{{ url('managelibraries/bureausandservices') }}" class="ui mini basic black button">Clear</a>
                                </form>
                            </div>
                        </div>
                        <table class="ui teal table">
                        <thead>
                            <tr>
                                <th>
                                    Bureaus and Services
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="4">
                                   
                                </th>
                            </tr>
                        </tfoot>
                    </table>    
                </div>
            </div>
        </div>
    </div>
@stop
