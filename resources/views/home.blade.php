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
    <body class="home">
        <div class="container">
            <img class="img-rounded img-responsive center-block" src="{{URL::to('src/img/Banner.jpg')}}" alt="Survey Kepuasan Pengguna">

                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <div class="box">
                            
                            <div class="info">
                                <h4 class="text-center">Selamat Datang</h4>
                                <p>Dalam rangka meningkatkan kualitas Layanan, perlu dilaksanakan survey yang ditujukan kepada seluruh pengguna Layanan Pusintek di 
                                    lingkungan Kementerian Keuangan. Survey ditujukan untuk mengetahui tingkat penggunaan, kebutuhan, dan kepuasan pengguna terhadap layanan Pusintek di lingkungan 
                                    Kementerian Keuangan.</p>
                                    <p>Berkenaan dengan hal tersebut diatas, kami mengharapkan peran serta dalam pengisian survey berikut selambat-lambatnya sampai dengan tanggal xxx 2016.</p>

                                    <p>Demikian kami sampaikan, atas perhatian dan kerjasamanya, kami ucapkan terima kasih.</p>
                                <a href="{{route('login')}}" class="btn">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <script type="text/javascript" src="{{ URL::to('src/js/jquery-2.1.1.min.js') }}"></script>
        <script type="text/javascript" src=" {{ URL::to('src/js/bootstrap.js') }} "></script>
        @yield('script')
    </body>
</html>