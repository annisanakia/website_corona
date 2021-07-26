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
            @foreach($datas as $data)
            <div class="col-md-12">
                <br>
                <div class="card">
                    <div class="card-header bg-tosca text-white">
                        <h5 class="card-title mb-0">{{ $data->name }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            {{ $data->desc }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <br><br>
    </div>
</div>
@endsection