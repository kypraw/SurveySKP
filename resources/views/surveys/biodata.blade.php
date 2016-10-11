@extends('layouts.master')

@section('content')
    <h3 class="biodata">Selamat datang, mohon lengkapi data Anda terlebih dahulu</h3>
    <div class="col-md-4 col-md-offset-4">
        <form action="{{route('biodata.post')}}" method="post">
            <div class="form-group">
            <label for="unit">Unit Kerja</label>
            <select class="form-control" name="unit" id="unit">
                <option value="Setjen">Setjen</option>
            </select>
            </div>
            <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <select class="form-control" name="jabatan" id="jabatan">
                <option value="Pelaksana">Pelaksana</option>
            </select>
            </div>
            <div class="form-group">
            <label for="lokasi kerja">Lokasi Kerja</label>
            <select class="form-control" name="lokasi" id="lokasi">
                <option value="DKI Jakarta">DKI Jakarta</option>
            </select>
            </div>
            {{csrf_field()}}
            <button class="btn btn-md btn-primary btn-block" type="submit">Next</button>
    </div>
        </form>
    </div>
@endsection