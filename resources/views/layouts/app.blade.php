<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Adverts') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ mix('css/app.css', 'build') }}" rel="stylesheet">
</head>
<body>
<header>
   @include('layouts.partials.nav')
</header>
<main class="app-content py-3">
    <div class="container">
        @include('flash::message')
        @section('breadcrumbs', Breadcrumbs::render())
        @yield('breadcrumbs')

        @include('layouts.partials.flash')
        @yield('content')

    </div>
</main>



<footer>
    <div class="container">
        <div class="border-top pt-3">
            <p>&copy; {{ date('Y') }} - {{ config('app.name', 'Adverts') }}</p>
        </div>
    </div>
</footer>

<script src="{{ mix('js/app.js', 'build') }}" defer></script>

</body>
</html>
