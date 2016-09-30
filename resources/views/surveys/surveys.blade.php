@extends('layouts.master')

@section('content')
    <h3>Pilih Survey Anda</h3>
    @foreach($surveys as $survey)
        <p>{{ $survey->title }}
    @endforeach
@endsection