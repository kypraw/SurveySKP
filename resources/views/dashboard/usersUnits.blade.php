@extends('layouts.master')

@section('content')
    
    <div class="row">
    
            <div class="col-md-8 col-md-offset-2">
            <table id="layanan" class="table table-bordered table-hover">
            <a href="{{route('dashboard.byJabatan')}}"><p id="right-align">By Jabatan</p></a>
            <a href="{{route('users.unit')}}"><p id="right-align">By Unit Eselon I</p></a>  
                <th>Unit</th>
                <th>Jumlah Responden</th>
                @foreach($usersUnits as $usersUnit)                    
                    <tr>
                        <td><a href="{{route('users.per', ['unit_two_id' => $usersUnit->id])}}">{{$usersUnit->eselon_dua}}</a></td>
                        <td id="right-align">{{$usersUnit->total}}</td>
                    </tr>
                @endforeach
            </table>
            <br>        
            </div>
    </div>
@endsection