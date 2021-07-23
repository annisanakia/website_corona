<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=yes">

    <meta name="csrf-token" content="{{ csrf_token()}}">

    <link rel="icon" href="{{ asset('assets/images/templates/favicon.png') }}">
    <title>Covid-19 Website</title>

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugin/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugin/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    @yield('styles')
</head>
<body>
    <div class="header">
        <div class="head-cov">
            <div class="container">
                <a class="title" href="#">COVID-19 WEBSITE</a><br>
                Indonesia peduli covid-19
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ $active == 1? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $active == 2? 'active' : '' }}" href="{{ url('home/covid19_case') }}">Data Penyebaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $active == 3? 'active' : '' }}" href="{{ url('home/vaccine_variant') }}">Varian Vaksin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $active == 4? 'active' : '' }}" href="{{ url('home/covid19_variant') }}">Varian Covid-19</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $active == 5? 'active' : '' }}" href="{{ url('home/founder') }}">Founder</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    @yield('content_app')

    <div class="footer text-white">
        <div class="container">
            2021© Alvita dan Nakia
        </div>
    </div>
</body>

@yield('scripts')
<script src="{{ asset('assets/plugin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</html>