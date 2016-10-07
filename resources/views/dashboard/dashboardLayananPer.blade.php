@extends('layouts.master')

@section('content')
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
@endsection