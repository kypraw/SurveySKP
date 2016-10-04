@extends('layouts.master')

@section('content')
    <h3>Pilih Semua Layanan yang Pernah Anda Gunakan</h3>
    <br>
    <form action="{{ route('surveys.post') }}" method="post">
    @foreach($surveys as $survey)
        @if($survey->id % 2 == 1)
            <div class="row">
        @endif
        <div class="col-md-6 surveygrid">
            <div class="row">
                <label><p class="title-fill"><input type="checkbox" name="survey[]" value="{{ $survey->id }}">
                <strong>{{$survey->id . ". " . $survey->title }}</strong></p></label>
            </div>
            <!--
            <div class="row deskripsisurvey">
                <p>{{ $survey->deskripsi }}</p>
            </div>
            -->
        </div>
        @if($survey->id % 2 == 0)
            </div>
        @endif
    @endforeach
    {{csrf_field()}}
    <div class="col-md-12">
        <div class="col-md-4"></div>
        <div class="col-md-2">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Next</button>
        </div>
    </div>
    <!--
    <div class="col-md-2 col-md-offset-5">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Next</button>
    </div>
    -->
    </form>  
    
@endsection