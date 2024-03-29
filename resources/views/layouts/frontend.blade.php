<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>


    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/custom.js')}}">

</head>
<body>

    <div>
        @include('layouts.inc.navbar')
        @yield('content')
    </div>    
    
    <script src="{{asset('frontend/js/bootstrap5.bundle.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-3.6.0.min.js')}}"> </script> 
</body>
</html>