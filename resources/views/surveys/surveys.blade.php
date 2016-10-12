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
    
    @foreach($surveys as $survey)
        @if($survey->id % 10 == 1)
            <div class="col-lg-6 surveygrid">
        @endif
            <div class="row">
                <label><p class="title"><input type="checkbox" name="survey[]" value="{{ $survey->id }}"> <strong>{{$survey->id . ". "}} <span class="title-fill">{{$survey->title }}</span></strong></p></label>
            </div>
        @if($survey->id % 10 == 0)
            </div>
        @endif
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
        <h4 class="modal-title">Petunjuk Pengisian</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
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