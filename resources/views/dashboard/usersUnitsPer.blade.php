@extends('layouts.master')

@section('content')
    <div class="col-lg-6 col-lg-offset-3">
    @foreach($users as $user)
        <p>{{$user->username}}</p>
    @endforeach
    </div>
@endsection