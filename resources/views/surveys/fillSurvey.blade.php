@extends('layouts.master')

@section('content')
    <h3>Silahkan isi survey dibawah ini</h3>
    
    <form action="{{route('answers.post')}}" method=post> 
    @foreach($grouped as $group)
        <p id="right-align">1 = Tidak Puas, 2 = Kurang Puas, 3 = Cukup Puas, 4 = Puas, 5 = Sangat Puas
        <div class="panel panel-default">
        <div class="panel-heading"><p class="title">{{$group[0]->survey_id . ". " . $group[0]->title}}
        <p>{{$group[0]->deskripsi}}</p>
        </div>
            <div class="panel-body">
            @foreach($group as $g)
                <div class="col-md-12 pertanyaan">
                    <div class="col-md-9">
                        <p>{{$g->pertanyaan}}
                    </div>
                    <div class="col-md-3 radio-button">
                        <fieldset id="{{$g->id}}">
                        <label class="radio-inline">
                            <input type="radio" name="nilaipertanyaan[{{$g->id}}]" value="1" required>1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="nilaipertanyaan[{{$g->id}}]" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="nilaipertanyaan[{{$g->id}}]" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="nilaipertanyaan[{{$g->id}}]" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="nilaipertanyaan[{{$g->id}}]" value="5">5
                        </label>
                        </fieldset>
                    </div>
                </div>
            @endforeach
                <div class="form-group col-md-9">
                    <label for="comment">Komentar (Wajib diisi):</label>
                    <textarea class="form-control" rows="5" name="komentar[{{$group[0]->survey_id}}]" required></textarea>
                </div>
            </div>
        </div>
    @endforeach
    {{csrf_field()}}
    <div class="col-md-12">
        <div class="col-md-4"></div>
        <div class="col-md-2">
            <a href="{{route('surveys')}}" class="btn btn-primary btn-md btn-block">Back</a>
        </div>
        <div class="col-md-2">
            <button class="btn btn-md btn-primary btn-block" type="submit">Submit</button>
        </div>
    </div>
    </form>
@endsection