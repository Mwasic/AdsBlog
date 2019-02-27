<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Laila" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('inc.navbar')
    <div class="container">
        @yield('content')
    </div>
  

</body>
</html>