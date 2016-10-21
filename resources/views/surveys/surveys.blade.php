@extends('layouts.master')

@section('container-class')
    surveys
@endsection

@section('content')
    <h3>Pilih Layanan yang Pernah Anda Gunakan (Bisa Lebih Dari Satu)</h3>
    <br>
    <form action="{{ route('surveys.post') }}" method="post">
    <!--
    @foreach($surveys as $survey)
        @if($survey->id % 2 == 1)
            <div class="row">
        @endif
        <div class="col-md-6 surveygrid">
            <div class="row">
                <label><p class="title"><input type="checkbox" name="survey[]" value="{{ $survey->id }}"><strong>{{$survey->id . ". "}} <span class="title-fill">{{$survey->title }}</span></strong></p></label>
            </div>
        </div>
        @if($survey->id % 2 == 0)
            </div>
        @endif
    @endforeach
    -->
    <!--
    @foreach($surveys as $survey)
        @if($survey->id % 11 == 1)
            <div class="col-lg-6 surveygrid">
        @endif
            <div class="row">
                <label><p class="title"><input type="checkbox" name="survey[]" value="{{ $survey->id }}"> <strong> <span class="title-fill">{{$survey->id . ". " . $survey->title }}</span></strong></p></label>
            </div>
        @if($survey->id % 11 == 0 OR $survey->id == 21)
            </div>
        @endif
    @endforeach
    -->

    <strong><p>Untuk informasi lebih detail dari masing-masing layanan silahkan <a href="{{URL::to('/SC2016.pdf')}}" target="_blank">klik disini</a></p></strong>
     @foreach($surveys as $survey)
        <div class="col-lg-12 surveygrid">
            <div class="row">
                <label><p class="title"><input type="checkbox" name="survey[]" value="{{ $survey->id }}"> <strong> <span class="title-fill">{{$survey->id . ". " . $survey->title }}</span></strong></p></label>
                <p>{{$survey->deskripsi}}</p>
            </div>
       </div>
    @endforeach

    {{csrf_field()}}
    
    <div class="col-md-12">
        <div class="col-md-3"></div>
        <div class="col-md-2">
            <a href="{{route('biodata')}}" class="btn btn-primary btn-md btn-block">Back</a>
        </div>
        <div class="col-md-2">
            <button class="btn btn-md btn-primary btn-block" type="submit">Next</button>
        </div>
    </div>
    <!--
    <div class="col-md-2 col-md-offset-5">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Next</button>
    </div>
    -->
    </form>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Petunjuk Pengisian Survey</h4>
      </div>
      <div class="modal-body">
        <p>Sebelumnya kami ucapkan terimakasih karena Bapak/Ibu telah meluangkan waktu untuk mengisi Survey Kepuasan Pengguna Pusintek 2016.</p>
        <p>Berikut adalah petunjuk pengisian survey:</p>
        <ol>
            <li>Pengisian survey hanya dilaksanakan satu kali.</li>
            <li>Silahkan pilih semua layanan yang pernah Bapak/Ibu gunakan dengan cara mencentang checkbox atau mengklik nama layanan.</li>
            <li>Klik tombol Next jika telah selesai memilih.</li>
            <li>Sebelum mengisi survey yang Anda pilih, mohon memberikan penilaian terhadap pelayanan yang diberikan oleh Service Desk Pusintek</li>
            <li>Silahkan isi survey pada halaman berikutnya.</li>
            <li>Untuk informasi lebih detail dari masing-masing layanan silahkan <a href="{{URL::to('/SC2016.pdf')}}" target="_blank">klik disini</a></li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>
@endsection