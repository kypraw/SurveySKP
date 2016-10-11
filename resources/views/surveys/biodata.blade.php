@extends('layouts.master')

@section('content')
    <h3 class="biodata">Selamat datang, mohon lengkapi data Anda terlebih dahulu</h3>
    <div class="col-md-4 col-md-offset-4">
        <form action="{{route('biodata.post')}}" method="post">
            <div class="form-group">
            <label for="unit">Unit Kerja</label>
            <select class="form-control" name="unit" id="unit">
            @foreach($units as $unit)
                @if($unit->unitLong == "Sekretariat Jenderal")
                    <option value="{{$unit->id}}" selected>{{$unit->unitLong}}</option>
                @else
                <option value="{{$unit->id}}">{{$unit->unitLong}}</option>
                @endif
            @endforeach 
            </select>
            </div>
            <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <select class="form-control" name="jabatan" id="jabatan">
            @foreach($jabatans as $jabatan)
                @if($jabatan->jabatan == "Pelaksana")
                    <option value="{{$jabatan->id}}" selected>{{$jabatan->jabatan}}</option>
                @else
                <option value="{{$jabatan->id}}">{{$jabatan->jabatan}}</option>
                @endif
            @endforeach>
            </select>
            </div>
            <div class="form-group">
            <label for="lokasi kerja">Lokasi Kerja</label>
            <select class="form-control" name="lokasi" id="lokasi">
            @foreach($lokasis as $lokasi)
                @if($lokasi->lokasi == "DKI Jakarta")
                    <option value="{{$lokasi->id}}" selected>{{$lokasi->lokasi}}</option>
                @else
                <option value="{{$lokasi->id}}">{{$lokasi->lokasi}}</option>
                @endif
            @endforeach>
            </select>
            </div>
            {{csrf_field()}}
            <button class="btn btn-md btn-primary btn-block" type="submit">Next</button>
    </div>
        </form>
    </div>
@endsection