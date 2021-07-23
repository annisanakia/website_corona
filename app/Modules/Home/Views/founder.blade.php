@extends('layout')
@section('content_app')
<div class="background-holder-index detail border-bottom" style="background: url({{ asset('assets/images/bg.jpg') }}) 50% 50%;">
    <div class="index-cover">
        <div class="text-cover text-center">
            <h1><b>Founder</b></h1>
        </div>
    </div>
</div>


<div class="bg-softblue">
    <div class="container">
        <br>
        <h4>Founder Covid-19 Website</h4>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card text-center p-4 border-primary">
                    <i class="fas fa-user fa-3x"></i>
                    <br>
                    <h5>Annisa Nakia Shakila</h5>
                    (20190801336)<br>
                    Teknik Informatika<br>
                    Mata Kuliah Pemrograman Web<br>
                    Universitas Esa Unggul
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center p-4 border-primary">
                    <i class="fas fa-user fa-3x"></i>
                    <br>
                    <h5>Alvita Budianti</h5>
                    (20190801206)<br>
                    Teknik Informatika<br>
                    Mata Kuliah Pemrograman Web<br>
                    Universitas Esa Unggul
                </div>
            </div>
        </div>
        <br>
    </div>
</div>

@endsection