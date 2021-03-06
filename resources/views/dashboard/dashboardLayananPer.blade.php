@extends('layouts.master')

@section('content')
    <h3>{{$surveyScore[0]->title}}</h3>
    <br>
    <div class="col-lg-8 col-lg-offset-2">
    <table class="table">
        <th>Pertanyaan</th>
        <th>Nilai</th>
    @foreach($surveyScore as $score)
        <tr>
            <td><?php echo($score->pertanyaan) ?></td>
            <td id="right-align">{{number_format($score->averageScore, 2)}}</td>
        </tr>
    @endforeach
    </table>
    </div>
    <div class="col-lg-6">
    <h3 class="left-align">Komentar:</h3>
    @foreach($commentPagination as $comment)
        <row><p>{{$comment->longname}}: {{$comment->komentar}}</p></row>
    @endforeach

    <div class="col-md-12">{{$commentPagination->links()}}</div>
    <a href="{{route('layanan')}}" class="btn btn-primary btn-md">Back</a>
    </div>
@endsection