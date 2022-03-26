<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

    <!-- CSRF Token -->
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>--}}

    <!-- Fonts -->
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">--}}
</head>
<body>
<div>
    @yield('content')
</div>
</body>
</html>
