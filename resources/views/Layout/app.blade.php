<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nazmul Hossain</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap/aos.css')  }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap/line-awesome.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/style.css') }}">
</head>
<body data-spy="scroll" data-target=".navbar">
    @include('Layout.header')


    @yield('content')




    @include('Layout.footer')
    




    <script src=" {{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src=" {{ asset('js/bootstrap/aos.js') }}"></script>
    <script src=" {{ asset('js/bootstrap/main.js') }}"></script>
</body>
</html>