@extends('layouts.master-terimakasih')

@section('content')
<div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">
        <div class="col-lg-6 col-lg-offset-3">
          <div class="inner cover">
            <h1 class="cover-heading">Terimakasih!</h1>
            <p class="lead">Kami sangat mengapresiasi kesediaan Anda untuk mengisi Survey Kepuasan Pengguna Pusintek 2016.</p>
            <p class="lead">Sebelum Anda menutup halaman ini, bisakah kami minta bantuan Anda sekali lagi?</p>
            <p class="lead">Kami akan sangat berterimakasih jika Anda juga dapat menginformasikan survey ini kepada rekan kerja Anda.</p>
            <p class="lead">Setiap pengisian survey ini adalah perubahan positif bagi Pusintek.</p>
            <p class="lead">Dan kami ingin Anda menjadi bagian perubahan tersebut.</p>
            <p class="lead">OK, Selamat bekerja dan selamat menjalani hari Anda dengan hebat!</p>

            <a href="{{ route('logout') }}"><button class="btn btn-md btn-primary">Logout</button></a>
          </div>
        </div>
        </div>

      </div>

    </div>
@endsection