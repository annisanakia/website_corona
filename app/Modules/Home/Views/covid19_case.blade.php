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
    <h4>Data Penyebaran Covid-19 Tiap Provinsi</h4>
    <a href="{{ url('home/covid19_case_create') }}" class="btn btn-primary float-end">Tambah Data</a>
    <br>
    <div class="table-responsive mt-4">
        <table class="table table-bg-w table-hover">
            <thead class="bg-grey text-white">
                <tr>
                    <th>Provinsi</th>
                    <th>Dirawat</th>
                    <th>Terkonfirmasi</th>
                    <th>Sembuh</th>
                    <th>Meninggal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($datas) <= 0)
                    <tr>
                        <td class="text-center">Data Tidak Ditemukan</td>
                    </tr>
                @else
                    @foreach($datas as $data)
                        <tr>
                            <td>{{ $data->provinsi }}</td>
                            <td>{{ number_format($data->terkonfirmasi) }}</td>
                            <td>{{ number_format($data->dirawat) }}</td>
                            <td>{{ number_format($data->sembuh) }}</td>
                            <td>{{ number_format($data->meninggal) }}</td>
                            <td>
                                <a href="{{ url('home/covid19_case_edit/'.$data->id) }}" class="btn btn-success">Edit</a>
                                <a href="{{ url('home/covid19_case_delete/'.$data->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <br>
    </div>
</div>

    <div class="container">
        <br>
        <h4>Penyebaran Covid-19 di Indonesia</h4>
        <div class="row">
            <div class="col-md-3">
                <br>
                <div class="card text-center border-warning text-orange bg-softblue">
                    <br>
                    <i class="fas fa-virus fa-3x"></i>
                    <div class="card-body">
                        <h5 class="card-title">Terkonfirmasi</h5>
                        <h1 class="card-title">{{ number_format($terkonfirmasi) }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <br>
                <div class="card text-center border-primary text-primary bg-softblue">
                    <br>
                    <i class="fas fa-procedures fa-3x"></i>
                    <div class="card-body">
                        <h5 class="card-title">Dirawat</h5>
                        <h1 class="card-title">{{ number_format($dirawat) }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <br>
                <div class="card text-center border-success text-success bg-softblue">
                    <br>
                    <i class="fas fa-heartbeat fa-3x"></i>
                    <div class="card-body">
                        <h5 class="card-title">Sembuh</h5>
                        <h1 class="card-title">{{ number_format($sembuh) }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <br>
                <div class="card text-center border-danger text-danger bg-softblue">
                    <br>
                    <i class="fas fa-skull-crossbones fa-3x"></i>
                    <div class="card-body">
                        <h5 class="card-title">Meninggal</h5>
                        <h1 class="card-title">{{ number_format($meninggal) }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
@endsection