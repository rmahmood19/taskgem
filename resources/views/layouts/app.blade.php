<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->


    </head>
    <body class="font-sans antialiased bg-primary">
    <div class="bg-primary px-4 py-4 text-red-900">hieie</div>
        <div class="flex justify-center items-center bg-primary py-4 p-4 " id="app">
            <!-- Page Content -->
                {{ $slot }}

        </div>
        <script src="{{ mix('js/app.js') }} "></script>
    </body>
</html>
