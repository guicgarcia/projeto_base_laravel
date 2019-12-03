<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="freehtml5.co"/>

    <title>Login</title>
    
    <link rel="icon" href="">
    <link href="https://fonts.googleapis.com/css?family=Miriam+Libre:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ url('css/fontawesome.min.css') }}">
    @yield('stylesheet')
</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">
    @include('front.includes.header')
    
    @include('front.includes.menu')
    
    @yield('content')

    @include('front.includes.footer')
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

@yield('scripts')


<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/dashboard.js') }}"></script>
<script src="{{ url('js/fontawesome-all.min.js') }}"></script>

</body>
</html>