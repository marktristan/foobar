<!doctype html>
<html>

<head>

  {{-- Basic page needs --}}
  <meta charset="utf-8" />
  <title>
    @section('title')
      My Project
    @show
  </title>

  {{-- Mobile specific metas --}}
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  {{-- CSS --}}
  {{ HTML::style('css/bootstrap.min.css') }}
  {{ HTML::style('css/bootstrap-theme.css') }}

  <style>
    @section('styles')
      body {
        padding-top: 70px;
      }
    @show
  </style>

  {{-- HTML5 shim, for IE6-8 support of HTML5 elements --}}
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>

<body>

  @include('includes.headernav')

  <div class="container">
    @include('includes.notification')
    <div id="main">@yield('content')</div>
    @include('includes.footer')
  </div>

  {{-- Javascripts --}}
  {{ HTML::script('js/jquery-1.11.1.min.js') }}
  {{ HTML::script('js/bootstrap.min.js') }}
  {{ HTML::script('js/jquery.pjax.js') }}
  <script>
    $(function(){
      $(document).pjax('a');
    });
  </script>

</body>

</html>