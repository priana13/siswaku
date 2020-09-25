<!DOCTYPE html>
<html>
<title>Belajar laravel</title>
<head>

    <meta charset="utf-8">
    <meta http-quiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="{{asset('bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">


</head>

<body>
    <div class="container">


        @yield('main')

        @yield('footer')
    </div>

    <script src="{{asset('bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/jquery.js')}}"></script>

</body>
</html>