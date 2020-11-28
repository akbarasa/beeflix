<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BEEFLIX') }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">


</head>
<body >
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                
            <a class="navbar-brand" href="{{ url('/') }}" style="margin-left: 100px;">
                <b>
                   BEEFLIX
                </b>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <br>
        <div class="container">
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                 <a href="{{  url()->previous() }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> KEMBALI
                </a>
                <a href="{{ url('/viewAllFilm') }}"  class="btn btn-light">
                    LIHAT SEMUA FILM
                </a>
            </div>
           
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

<script src="{{ asset('js/time.js') }}"></script>

</body>
</html>
