@extends('layout')
@section('content_app')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active background-holder-index" style="background: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6) ), url({{ asset('assets/images/virus.jpg') }}) 50% 50%">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="index-cover">
                        <div class="text-cover text-white">
                            <h1><b>Website Corona</b></h1>
                            Website yang menyediakan berbagai informasi aktual mengenai virus covid-19 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item background-holder-index" style="background: linear-gradient(to right, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1) ), url({{ asset('assets/images/mask.jpg') }}) 50% 50%;">
            <div class="row">
                <div class="col-md-12">
                    <div class="index-cover">
                        <div class="text-cover text-center text-white">
                            <h1 class="pink-shadow"><b>Pakai Maskermu</b></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item background-holder-index" style="background: url({{ asset('assets/images/family.jpg') }}) 50% 50%;">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="bg-softblue">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="h-100">
                    <br><br>
                    <h2>Apa itu Covid-19?</h2>
                    Penyakit virus corona (COVID-19) adalah penyakit menular yang disebabkan
                    oleh virus corona yang baru-baru ini ditemukan.
                    <br>
                    Sebagian besar orang yang tertular COVID-19 akan mengalami gejala ringan
                    hingga sedang, dan akan pulih tanpa penanganan khusus.
                    <br><br><br>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <br>
    <h4>Protokol Kesehatan (5M)</h4>
    <br>
    <div class="row">
        <div class="col-lg-8">
            <div class="card h-100">
                <ul class="list-round w-100">
                    <li>
                        <div class="panel-list text-white">
                            <div class="panel-round"></div>
                            Mencuci Tangan
                        </div>
                    </li>
                    <li>
                        <div class="panel-list text-white">
                            <div class="panel-round"></div>
                            Memakai Masker
                        </div>
                    </li>
                    <li>
                        <div class="panel-list text-white">
                            <div class="panel-round"></div>
                            Menjaga Jarak
                        </div>
                    </li>
                    <li>
                        <div class="panel-list text-white">
                            <div class="panel-round"></div>
                            Menjauhi Kerumunan
                        </div>
                    </li>
                    <li>
                        <div class="panel-list text-white">
                            <div class="panel-round"></div>
                            Mengurangi Mobilitas
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100">
                <img src="{{ asset('assets/images/mask2.jpg') }}" class="img-fluid">
            </div>
        </div>
    </div>
    <br>
</div>

<div class="bg-softblue">
    <div class="container">
        <br>
        <h4>Penyebaran Covid-19 di Indonesia</h4>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card text-center border-warning text-orange">
                    <br>
                    <i class="fas fa-virus fa-3x"></i>
                    <div class="card-body">
                        <h5 class="card-title">Terkonfirmasi</h5>
                        <h1 class="card-title">{{ number_format($terkonfirmasi) }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <br>
                <div class="card text-center border-primary text-primary">
                    <br>
                    <i class="fas fa-procedures fa-3x"></i>
                    <div class="card-body">
                        <h5 class="card-title">Dirawat</h5>
                        <h1 class="card-title">{{ number_format($dirawat) }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <br>
                <div class="card text-center border-success text-success">
                    <br>
                    <i class="fas fa-heartbeat fa-3x"></i>
                    <div class="card-body">
                        <h5 class="card-title">Sembuh</h5>
                        <h1 class="card-title">{{ number_format($sembuh) }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <br>
                <div class="card text-center border-danger text-danger">
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
</div>
@endsection