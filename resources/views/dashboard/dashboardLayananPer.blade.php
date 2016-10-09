@extends('layouts.master')

@section('content')
    <h3>{{$surveyScore[0]->title}}</h3>
    <br>
    <table class="table">
        <th>Pertanyaan</th>
        <th>Nilai</th>
    @foreach($surveyScore as $score)
        <tr>
            <td>{{$score->pertanyaan}}</td>
            <td id="right-align">{{$score->averageScore}}</td>
        </tr>
    @endforeach
    </table>
    <h3 class="left-align">Komentar:</h3>
    @foreach($commentPagination as $comment)
        <row><p>{{$comment->username}}: {{$comment->komentar}}</p></row>
    @endforeach

    <div class="col-md-12">{{$commentPagination->links()}}</div>
    <a href="{{route('layanan')}}" class="btn btn-primary btn-md">Back</a>
@endsection