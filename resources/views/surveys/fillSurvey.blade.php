@extends('layouts.master')

@section('content')
    <h3>Silahkan isi survey dibawah ini</h3>
    <p>1 = Tidak Puas, 2 = Kurang Puas, 3 = Cukup Puas, 4 = Puas, 5 = Sangat Puas
    <form action="{{route('answers.post')}}" method=post> 
    @foreach($grouped as $group)
        <div class="col-md-12"><p class="title">{{$group[0]->title}}</div>
        @foreach($group as $g)
            <div class="col-lg-12">
                <div class="col-md-9">
                    <p>{{$g->pertanyaan}}
                </div>
                <div class="col-md-3">
                    <fieldset id="{{$g->id}}">
                    <label class="radio-inline">
                        <input type="radio" name="nilaipertanyaan[{{$g->id}}]" value="{{$g->id}},1" required>1
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="nilaipertanyaan[{{$g->id}}]" value="{{$g->id}},2">2
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="nilaipertanyaan[{{$g->id}}]" value="{{$g->id}},3">3
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="nilaipertanyaan[{{$g->id}}]" value="{{$g->id}},4">4
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="nilaipertanyaan[{{$g->id}}]" value="{{$g->id}},5">5
                    </label>
                    </fieldset>
                </div>
            </div>
        @endforeach
    @endforeach
    {{csrf_field()}}
    <div class="col-md-2 col-md-offset-5">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
    </div>
    </form>
@endsection