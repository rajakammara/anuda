<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Annamayya Urban Development Authority') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen">
        {{-- Desktop Navbar --}}
        <div class="hidden md:flex justify-center items-center pt-4 pb-4 md:space-x-8">
            <div class="hidden md:flex ">
            <img src={{asset('images/aplogo.png')}} class="w-28 object-contain"/>
            </div>
            <div class="flex flex-col justify-center text-center ">
                <h2 class="text-xl md:text-2xl font-semibold text-purple-600" style="text-shadow: 0 2px 4px rgba(0,0,0,0.10);">అన్నమయ్య  పట్టణాభివృద్ధి సంస్థ</h2>
                <h2 class="text-xl md:text-2xl font-semibold">ANUDA</h2>
                <h2 class="text-xl md:text-2xl font-semibold text-red-700" style="text-shadow: 0 2px 4px rgba(0,0,0,0.10);">Annamayya Urban Development Authority</h2>
            </div>
            <div class="hidden md:flex ">
               <img src={{asset('images/AP_CM.jpg')}} class=" w-28 object-cover m-2"/> 
               {{-- <img src={{asset('images/bodtsa.jpg')}} class="w-28 object-contain m-2"/>  --}}
            </div>
        </div>

        



        @include('partials.guestnavbar')



        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>
