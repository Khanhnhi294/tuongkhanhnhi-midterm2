<html>

<head>
    <title>Furniture - @yield('title')</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <head>
        @include('layouts.header')
    </head>

  <div class="content_AbUs">
    {{-- <div class="row" style="width: 100%"> --}}
        {{-- <div class="col-md-3">
           
        </div>
        <div class="col-md-9">
            @yield('content')
        </div> --}}
       
            @yield('content')
       
    {{-- </div> --}}
  </div>

    <footer>
        @include('layouts.footer')
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>