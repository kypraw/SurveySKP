@extends('layouts.master')

@section('content')
    
    <div class="row">
    
            <div class="col-md-8 col-md-offset-2">
            <table id="layanan" class="table table-bordered table-hover">
            <a href="{{route('dashboard.byJabatan')}}"><p id="right-align">By Jabatan</p></a> 
                <th>Unit</th>
                <th>Jumlah Responden</th>
                @foreach($usersUnits as $usersUnit)                    
                    <tr>
                        <td>{{$usersUnit->unitLong}}</td>
                        <td id="right-align">{{$usersUnit->total}}</td>
                    </tr>
                @endforeach
            </table>
            <br>        
            </div>
    </div>
@endsection