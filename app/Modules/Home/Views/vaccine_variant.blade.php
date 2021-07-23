@extends('layout')
@section('content_app')
<div class="background-holder-index detail border-bottom" style="background: url({{ asset('assets/images/bg.jpg') }}) 50% 50%;">
    <div class="index-cover">
        <div class="text-cover text-center">
            <h1><b>Varian Vaksin</b></h1>
        </div>
    </div>
</div>

<div class="bg-softblue">
    <div class="container">
        <br>
        <h4>Varian Vaksin</h4>
        <div class="row">
            <div class="col-md-6">
                <br>
                <div class="card h-100">
                    <div class="card-header bg-tosca text-white">
                        <h5 class="card-title mb-0">Vaksin Sinovac</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Vaksin Corona buatan Sinovac menggunakan inactivated virus atau virus utuh yang sudah dimatikan.
                            Menurut Organisasi Kesehatan Dunia (WHO), metode ini sudah terbukti manjur dan telah digunakan dalam
                            pengembangan vaksin lain, seperti flu dan polio.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="https://alodokter.com/" target="_blank" class="btn bg-navy text-white float-end">Dapatkan Vaksin</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <br>
                <div class="card h-100">
                    <div class="card-header bg-tosca text-white">
                        <h5 class="card-title mb-0">Vaksin AstraZeneca</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Dalam vaksin AstraZeneca, viral vector yang digunakan adalah adenovirus atau virus umum yang biasa
                            menginfeksi tubuh manusia dalam penyakit sakit tenggorokan, demam atau pneumonia.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="https://alodokter.com/" target="_blank" class="btn bg-navy text-white float-end">Dapatkan Vaksin</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
</div>
@endsection