@extends('layouts.master')

@section('content')
    <div class="row">
            <div class="col-md-8 col-md-offset-2">
            
            <table id="layanan" class="table table-bordered table-hover"> 
                <th>Unit</th>
                <th>Jumlah Responden</th>
                @foreach($jabatans as $jabatan)                    
                    <tr>
                        <td>{{$jabatan->jabatan}}</a></td>
                        <td id="right-align">{{$jabatan->total}}</td>
                    </tr>
                @endforeach
            </table>
            <br>
            <a href="{{route('users')}}" class="btn btn-primary btn-md">Back</a>
            </div>
    </div>
@endsection