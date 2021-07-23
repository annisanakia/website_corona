@extends('layout')
@section('content_app')
<div class="background-holder-index detail border-bottom" style="background: url({{ asset('assets/images/bg.jpg') }}) 50% 50%;">
    <div class="index-cover">
        <div class="text-cover text-center">
            <h1><b>Varian Covid-19</b></h1>
        </div>
    </div>
</div>

<div class="bg-softblue">
    <div class="container">
        <br>
        <h4>Varian Covid-19</h4>
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="card">
                    <div class="card-header bg-tosca text-white">
                        <h5 class="card-title mb-0">Varian Alpha</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Virus ini adalah varian yang awalnya terdeteksi di Inggris. Alpha memiliki nama lain,
                            seperti varian Kent atau virus B117. Disebutkan jika virus ini setidaknya lebih mudah
                            menular daripada jenis yang pertama kali terdeteksi di China. Pada Oktober silam, strain
                            ini hanya terjadi pada 3 persen dari total kasus di Inggris, tetapi mencapai awal Februari,
                            tercatat sebanyak 96 persen dari jumlah seluruhnya sehingga menimbulkan gelombang ketiga.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <br>
                <div class="card">
                    <div class="card-header bg-tosca text-white">
                        <h5 class="card-title mb-0">Varian Beta</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Strain beta ini pertama kali terdeteksi di Afrika Selatan pada awal Oktober dan telah ditemukan di
                            lebih dari 80 negara. Virus ini membawa mutasi yang disebut dengan E484K, yang dapat membantu penyakit
                            ini menghindari sistem kekebalan. Jenis virus yang disebut juga dengan B1351 ini, disebut-sebut tidak
                            bekerja dengan baik pada seseorang yang mendapatkan vaksin AstraZeneca, karena hanya memberikan
                            perlindungan 10 persen terhadap gejala ringan hingga sedang.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <br>
                <div class="card">
                    <div class="card-header bg-tosca text-white">
                        <h5 class="card-title mb-0">Varian Delta</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Varian ini ditemukan di India yang pertama kali terdeteksi pada bulan Oktober, sehingga menyebabkan
                            gelombang kedua yang awalnya telah surut. Jenis virus COVID-19 ini lebih menular dan mampu menghindari
                            respons imun tubuh akibat mutasi yang terjadi. Bahkan, varian ini diperkirakan 40 persen lebih menular
                            dibandingkan jenis Alpha serta strain aslinya.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
</div>
@endsection