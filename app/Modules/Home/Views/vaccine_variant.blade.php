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
            @foreach($datas as $data)
            <div class="col-md-6">
                <br>
                <div class="card h-100">
                    <div class="card-header bg-tosca text-white">
                        <h5 class="card-title mb-0">{{ $data->name }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            {{ $data->desc }}
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ $data->link }}" target="_blank" class="btn bg-navy text-white float-end">Dapatkan Vaksin</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <br><br>
    </div>
</div>
@endsection