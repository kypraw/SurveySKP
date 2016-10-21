@extends('layouts.master')

@section('content')
    <div class="error-template">
                <h2>Maaf</h2>
                <div class="error-details">
                    Belum ada yang mengisi Survey
                </div>
                <div class="error-actions">
                    <a href="{{route('surveys')}}" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                    Take Me Home</a>
                </div>
            </div>    
@endsection