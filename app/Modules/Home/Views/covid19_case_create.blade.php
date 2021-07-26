@extends('layout')
@section('content_app')

<div class="background-holder-index detail" style="background: url({{ asset('assets/images/bg.jpg') }}) 50% 50%;">
    <div class="index-cover">
        <div class="text-cover text-center">
            <h1><b>Data Penyebaran</b></h1>
        </div>
    </div>
</div>

<div class="bg-softblue">
    <div class="container">
    <br>
    <h4>Tambah Data Provinsi Penyebaran Covid-19</h4>
    <br>
    <div class="row">
        <form action="{{ url('home/covid19_case_save') }}" method="post">
            {{csrf_field()}}
            <div class="col-md-6">
                <label class="form-label">Provinsi</label>
                <input type="text" name="provinsi" class="form-control" placeholder="Masukkan nama provinsi">
                {!!$errors->first('provinsi', ' <span class="help-block text-danger">:message</span>')!!}
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <br>
                <label class="form-label">Dirawat</label>
                <input type="number" name="dirawat" class="form-control" placeholder="Masukkan total yang dirawat">
                {!!$errors->first('dirawat', ' <span class="help-block text-danger">:message</span>')!!}
            </div>
            <div class="col-md-6">
                <br>
                <label class="form-label">Terkonfirmasi</label>
                <input type="number" name="terkonfirmasi" class="form-control" placeholder="Masukkan total yang terkonfirmasi">
                {!!$errors->first('terkonfirmasi', ' <span class="help-block text-danger">:message</span>')!!}
            </div>
            <div class="col-md-6">
                <br>
                <label class="form-label">Sembuh</label>
                <input type="number" name="sembuh" class="form-control" placeholder="Masukkan total yang sembuh">
                {!!$errors->first('sembuh', ' <span class="help-block text-danger">:message</span>')!!}
            </div>
            <div class="col-md-6">
                <br>
                <label class="form-label">Meninggal</label>
                <input type="number" name="meninggal" class="form-control" placeholder="Masukkan total yang meninggal">
                {!!$errors->first('meninggal', ' <span class="help-block text-danger">:message</span>')!!}
            </div>
            <div class="col-md-12">
                <br>
                <a href="{{ url('home/covid19_case') }}" class="btn btn-secondary me-1">Kembali</a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
    <br><br>
</div>
@endsection