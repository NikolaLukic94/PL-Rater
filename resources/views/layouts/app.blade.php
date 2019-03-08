<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'PLQR') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('theme_assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('theme_assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('theme_assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('theme_assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>  
  <!-- Argon JS -->
  <script src="{{ asset('theme_assets/js/argon.js?v=1.0.0') }}"></script>  
  <!-- LADA js -->
  <script src="{{ asset('/js/spin.min.js') }}"></script>
  <script src="{{ asset('/js/ladda.min.js') }}"></script>
  <script src="{{ asset('/js/custom_script.js') }}"></script>
    <!-- Fonts -->
  <link href="theme_assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="theme_assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nucleo.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/css/ladda.scss')}}" rel="stylesheet">    

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      <link href="theme_assets/img/brand/favicon.png" rel="icon" type="image/png">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
      <!-- Icons -->
      <link href="{{ asset('theme_assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
      <link type="text/css" href="{{ asset('theme_assets/css/argon.css?v=1.0.0') }}" rel="stylesheet">







</head>
<body>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
