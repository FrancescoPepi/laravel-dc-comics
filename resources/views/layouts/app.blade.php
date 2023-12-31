<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>

    {{-- CSS IMPORTATO DA YELD --}}
    @yield('css')

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body>
    <nav>
        @include('partials._navbar')
    </nav>

    <main>
        @yield('button-navigation')
        @yield('main-content')
    </main>

</body>

</html>
