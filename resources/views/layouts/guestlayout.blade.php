<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ANUDA | ANNAMAYYA URBAN DEVELOPMENT AUTHORITY</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

   

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    {{-- <script src="{{ mix('/js/app.js') }}"></script> --}}

   
 @stack('styles')
 @stack('scripts')
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen">
        {{-- Desktop Navbar --}}
        <div class="hidden md:flex justify-center items-center pt-4 pb-4 md:space-x-8">
            <div class="hidden md:flex ">
            
            
            <img src={{asset('images/logo.png')}} class="w-28 object-contain ml-2"/>
            <img src={{asset('images/AP_CM.jpg')}} class=" w-28 object-cover m-2"/> 
            </div>
            <div class="flex flex-col justify-center text-center ">
                <h2 class="text-xl md:text-2xl font-semibold text-purple-600" style="text-shadow: 0 2px 4px rgba(0,0,0,0.10);">అన్నమయ్య  పట్టణాభివృద్ధి సంస్థ</h2>
                <h2 class="text-xl md:text-2xl font-semibold">ANUDA</h2>
                <h2 class="text-xl md:text-2xl font-semibold text-red-700" style="text-shadow: 0 2px 4px rgba(0,0,0,0.10);">Annamayya Urban Development Authority</h2>
            </div>
            <div class="hidden md:flex ">
               
               <img src={{asset('images/aplogo.png')}} class="w-28 object-contain"/>
               <img src={{asset('images/ams.jpg')}} class="w-28 object-contain m-2"/> 
            </div>
        </div>

        



        @include('partials.guestnavbar')



        <!-- Page Content -->
        <main >
            <div id="app">
               
                 @yield('content')
            </div>
            
        </main>

       

        <footer >
            <div class="flex flex-col sm:flex-row h-auto p-6 bg-indigo-700 text-white">
            <div class="block sm:w-1/4 p-4">
                <h3 class="uppercase text-md border-l-4 pl-2 m-2">Important Links</h3>
                <ul class="list-disc ml-6">
                    <li>
                        <a href="https://bps.ap.gov.in/BPS/Views/Login.aspx" target="_blank" class="block hover:bg-indigo-500 p-2 text-sm">BPS</a>
                    </li>
                   <li>
                        <a href="http://dtcp.ap.gov.in/dtcpweb/index.html" target="_blank" class="block hover:bg-indigo-500 text-sm p-2">DTCP</a>
                    </li>
                    <li>
                        <a href="http://apdpms.ap.gov.in/" target="_blank" class="block hover:bg-indigo-500 text-sm p-2">APDPMS</a>
                    </li>
                    <li>
                        <a href="https://goir.ap.gov.in/" target="_blank" class="block hover:bg-indigo-500 text-sm p-2">GOIR</a>
                    </li>
                    <li>
                        <a href="https://www.ap.gov.in/" target="_blank" class="block hover:bg-indigo-500 text-sm p-2">AP State Portal</a>
                    </li>
                </ul>
            
            </div>
            <div class="block sm:w-1/4 p-4">
                <h3 class="uppercase text-md border-l-4 pl-2 m-2">Other Links</h3>
                <ul class="list-disc ml-6">
                    <li>
                        <a href="http://www.appublichealth.gov.in/home.do" target="_blank" class="block hover:bg-indigo-500 text-sm p-2">ENGINEERING</a>
                    </li>
                   <li>
                        <a href="https://www.core.ap.gov.in/CMDashBoard/Index.aspx" target="_blank"  class="block hover:bg-indigo-500 text-sm p-2">CORE DASHBOARD</a>
                    </li>
                    <li>
                        <a href="https://www.apindustries.gov.in/APIndus/Default.aspx" target="_blank" class="block hover:bg-indigo-500 text-sm p-2">AP INDUSTRIES</a>
                    </li>
                    <li>
                        <a href="https://www.rera.ap.gov.in/RERA/Views/Home.aspx" target="_blank" class="block hover:bg-indigo-500 text-sm p-2">AP RERA</a>
                    </li>
                    <li>
                        <a href="https://crda.ap.gov.in/APCRDAV2/views/aboutus.aspx" target="_blank" class="block hover:bg-indigo-500 text-sm p-2">AP CRDA</a>
                    </li>
                </ul>
            
            </div>
            <div class="block sm:w-1/4 p-4">
                <h3 class="uppercase text-md border-l-4 pl-2 m-2">Contact Details</h3>
                <div class="ml-6">
                     <p>
                    Annamayya Urban Development Authority,
                </p>
                <p>Door No. 36 / 263-29, Reddy Colony,</p>
                <p>Near Adithya Kalyanamadapam,</p>
                <p>Chinna chowk , Old Bypass Road,</p>
                <p>Kadapa, YSR District Andhra Pradesh 516 002</p>                
                
                <p class=""><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.281212659756!2d78.84335801483869!3d14.468534989886729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTTCsDI4JzA2LjciTiA3OMKwNTAnNDQuMCJF!5e0!3m2!1sen!2sin!4v1619578284727!5m2!1sen!2sin" width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
              </div>
            </div>
            <div class="block sm:w-1/4 p-4">
                 <h3 class="uppercase text-md border-l-4 pl-2 m-2">Visitor Count</h3>
                 <p class="p-2 bg-gray-800 text-center mt-6 font-mono text-lg text-white">
                     {{$pagehits}}
                 </p>
            </div>
            </div>
            <div class="flex justify-center bg-indigo-800 text-white p-4">
                <p>Copyright 2021 - ANUDA.IN. All Rights Reserved </p>
            </div>
        </footer>
    </div>
 
     <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
