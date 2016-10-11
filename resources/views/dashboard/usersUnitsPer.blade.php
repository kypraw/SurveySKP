@extends('layouts.master')

@section('content')
    
    @foreach($users as $user)
        <p>{{$user->username}}</p>
    @endforeach
    
@endsection