@extends('layouts.master')

@section('content')
    <div class="col-lg-6 col-lg-offset-3">
    <table class="table">
    <tr>
        <th>Nama Lengkap</th>
        <th>Email</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user->longname}}</td>
            <td>{{$user->email}}</td>
        </tr>
    @endforeach
    </table>
    </div>
@endsection