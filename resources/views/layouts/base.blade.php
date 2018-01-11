<!DOCTYPE html>
<html>
<head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Standard Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!-- Site Properties -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>Payroll @yield('title')</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('/dist/flatpickr.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('semantic/semantic.min.css') }}">
  <script type="text/javascript" src="{{ asset('/js/jquery3.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('/js/vue.js')}}"></script>
  <script type="text/javascript" src="{{ asset('/semantic/semantic.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('/dist/flatpickr.min.js')}}"></script>
	<style type="text/css">
    .ui.footer.segment {
      margin: 5em 0em 0em;
      padding: 5em 0em;
    }
    body{
      background-color:#F6F6F6;
    }
    .ui.menu .item>img:not(.ui) {
      width: 5em;
    }
    table.ui.teal.compact.table.customtable {
      margin-left: -20%;
    }
  </style>
  @yield('styles')
</head>
<body>
  @include('layouts.menu')
  <div style="height: 50px;"></div>
  <div class="ui container">
    <div class="sixteen wide column">
      <div class="ui basic segment">
        @yield('header')
        @if (count($errors) > 0)
          <div class="ui error message">
            <i class="close icon"></i>
            <div class="header">
              There was some errors with your submission
            </div>
            <ul class="list">
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        @if(Session::has('message'))
          <div class="ui info message">
            <i class="close icon"></i>
            <div class="header">
              Horay
            </div>
            <ul class="list">
              <li>{{ Session::get('message') }}</li>
            </ul>
          </div>
        @endif
        @if(Session::has('error'))
          <div class="ui error message">
            <i class="close icon"></i>
            <div class="header">
              There was some errors with your submission
            </div>
            <ul class="list">
              <li>{{ Session::get('error') }}</li>
            </ul>
          </div>
        @endif
        <section class="content">
          @yield('content')
        </section>
      </div>
    </div>
  </div>
  @yield('modals')
  @yield('scripts')
  <script type="text/javascript">
    $('.ui.dropdown').dropdown();
    $('.message .close').on('click', function() {
      $(this).closest('.message').transition('fade');
    });
  </script>
</body>
</html>
