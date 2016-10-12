@extends('layouts.master')

@section('content')
    <div class="row">
            <div class="col-md-8 col-md-offset-2">
            
            <table id="layanan" class="table table-bordered table-hover"> 
                <th>Unit</th>
                <th>Jumlah Responden</th>
                @foreach($locations as $location)                    
                    <tr>
                        <td>{{$location->lokasi}}</td>
                        <td id="right-align">{{$location->total}}</td>
                    </tr>
                @endforeach
            </table>
            <br>
            </div>
    </div>
@endsection