@extends('layouts.master')

@section('content')
    <div class="row">
            <div class="col-md-8 col-md-offset-2">
            
            <table id="layanan" class="table table-bordered table-hover"> 
                <th>Unit</th>
                <th>Jumlah Responden</th>
                @foreach($usersUnits as $usersUnit)                    
                    <tr>
                        <td><a href="{{route('users.per', ['unit_id' => $usersUnit->id])}}">{{$usersUnit->unitLong}}</a></td>
                        <td id="right-align">{{$usersUnit->total}}</td>
                    </tr>
                @endforeach
            </table>
            <br>
            <a href="{{route('dashboard.byJabatan')}}"><p id="right-align">By Jabatan</p></a>
            
            </div>
    </div>
@endsection