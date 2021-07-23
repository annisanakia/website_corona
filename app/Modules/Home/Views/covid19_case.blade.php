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
    <div class="table-responsive mt-4">
        <table class="table table-bg-w table-hover">
            <thead class="bg-grey text-white">
                <tr>
                    <th>Provinsi</th>
                    <th>Dirawat</th>
                    <th>Terkonfirmasi</th>
                    <th>Sembuh</th>
                    <th>Meninggal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>DKI Jakarta</td>
                    <td>86.021</td>
                    <td>770.487</td>
                    <td>673.492</td>
                    <td>10.974</td>
                </tr>
                <tr>
                    <td>Jawa Barat</td>
                    <td>125.232</td>
                    <td>547.254</td>
                    <td>414.252</td>
                    <td>7.770</td>
                </tr>
                <tr>
                    <td>Jawa Tengah</td>
                    <td>59.544</td>
                    <td>338.712</td>
                    <td>263.419</td>
                    <td>15.749</td>
                </tr>
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
                        <h1 class="card-title">3.082.410</h1>
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
                        <h1 class="card-title">569.901</h1>
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
                        <h1 class="card-title">2.431.911</h1>
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
                        <h1 class="card-title">80.598</h1>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
@endsection