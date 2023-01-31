<!DOCTYPE html>
<html>

<head>
  <title>{{ $title ?? 'Home' }} | Stock Opname</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!-- end Jquery -->

  @stack('plugin-styles')

  <!-- common css -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
  <!-- end common css -->

  @stack('style')
</head>

<body>


  <div class="main-wrapper" id="app">

    @include('layout.sidebar')
    <div class="page-wrapper">
      <div class="page-content">
        @yield('content')
      </div>
    </div>
  </div>


  <!-- base js -->
  <script src="{{ asset('js/app.js') }}"></script>
  <!-- end base js -->
</body>

</html>