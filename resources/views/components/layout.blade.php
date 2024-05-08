<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel - Notes</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased">
    @session('message')
        <div class="success-message">
            {{ session('message') }}
        </div>
    @endsession
    {{ $slot }}
</body>

</html>
