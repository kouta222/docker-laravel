<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/cfee941e8c.js" crossorigin="anonymous"></script>
      <!-- Styles -->
      <link href="{{ asset('css/kakomon.css') }}" rel="stylesheet">
      <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
         @component('components.header')
         @endcomponent

        <main class="py-4 mb-5">
            @yield('content')
        </main>

        @component('components.footer')
        @endcomponent

    </div>
</body>
</html>
