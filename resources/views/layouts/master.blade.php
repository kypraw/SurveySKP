<!DOCTYPE html>
<html>
    <head>
        <title>Survey Kepuasan Pengguna</title>
        <link rel="stylesheet" href="{{ URL::to('src/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ URL::to('src/css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Libre+Franklin">
        <!--optimize mobile experience-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body @yield('body-class')>
        @include('includes.header')
        <div class="container @yield('container-class')">
            @yield('content')
        </div>
        <script type="text/javascript" src="{{ URL::to('src/js/jquery-2.1.1.min.js') }}"></script>
        <script type="text/javascript" src=" {{ URL::to('src/js/bootstrap.js') }} "></script>
        @yield('script')
    </body>
    @include('includes.footer')
</html>