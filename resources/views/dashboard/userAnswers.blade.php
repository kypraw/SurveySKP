@extends('layouts.master')

@section('content')
    <table class="table">
        <tr>
            <th>ITSM</th>
            <th>Pertanyaan</th>
            <th>Nilai</th>
        </tr>
        @foreach($answers as $answer)
        <tr>
            <td>{{$answer->title}}</td>
            <td>{{$answer->pertanyaan}}</td>
            <td>{{$answer->nilai}}</td>
        </tr>
        @endforeach
    </table>
@endsection