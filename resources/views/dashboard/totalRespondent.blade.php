@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table id="layanan" class="table table-bordered table-hover">
                <th>ITSM</th>
                <th>Nama Layanan</th>
                <th>Total Responden</th>
                @foreach($totals as $total)                    
                    <tr>
                        <td id="center-align">{{$total->id}}</td>
                        <td>{{$total->title}}</td>
                        <td id="right-align">{{$total->totalRespondent}}</td>
                    </tr>
                @endforeach
            </table>
            </div>
        </div>
        <a href="{{route('layanan')}}" class="btn btn-primary btn-md">Back</a>
    </div>
@endsection