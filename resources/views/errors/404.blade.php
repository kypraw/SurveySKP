@extends('layouts.master')

@section('content')
    <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>
                    404 Not Found</h2>
                <div class="error-details">
                    <h2>Sorry, an error has occured, Requested page not found!</h2>
                </div>
                <div class="error-actions">
                    <a href="{{route('surveys')}}" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                    Take Me Home</a>
                </div>
            </div>    
@endsection