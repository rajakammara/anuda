<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Annamayya Urban Development Authority</title>

    {{-- favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/site.webmanifest">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,800;1,400&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

    </style>
</head>

<body class="antialiased">

    <div class="flex h-screen">
        <div class="m-auto">
            <h3 class="text-center text-xl">Welcome to</h3>
            <h3 class="text-center p-6 font-medium text-2xl md:text-4xl text-blue-500">Annamayya Urban Development Authority, Kadapa</h3>            
        </div>
    </div>


</body>

</html>
