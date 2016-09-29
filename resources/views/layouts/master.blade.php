<!DOCTYPE html>
<html>
    <head>
        <title>Survey Kepuasan Pengguna</title>
        <link rel="stylesheet" href="{{ URL::to('src/css/bootstrap.css') }}">

        <!--optimize mobile experience-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        @include('includes.header')
        <div class="container">
            @yield('content')

            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script src=" {{ URL::to('src/js/bootstrap.js') }} "></script>
        </div>
    </body>
</html>