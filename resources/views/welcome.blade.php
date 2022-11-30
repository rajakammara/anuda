@extends('layouts.guestlayout')

@section('content')
    <div class="container mx-auto">
        {{-- <div class="flex justify-center items-center h-auto flex-col">
        <h2 class="text-xl md:text-4xl text-blue-700">Website under maintenance.</h2>  
      
    </div> --}}
        <div>
            <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();" class="p-2">
                <span class="font-bold text-white bg-gray-700 p-1">Note:</span>
                <span class="text-red-500 font-semibold">
                    {{ $scrolling_text[0]->scrolling_text }}
                </span>
                {{-- <span>Sample Scrolling</span> --}}
            </marquee>
        </div>
        {{-- Slider Section --}}
        <div class="flex flex-col sm:flex-row justify-start">
            <div class="w-full sm:w-1/4 flex flex-col  space-y-2 bg-gray-100 p-2">

                {{-- Jurisdiction --}}
                <div class="flex flex-row  items-center bg-green-400 p-3 hover:shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                    </svg>
                    <h5 class="ml-2 text-white font-bold "><a href="{{ route('jurisdiction') }}">ANUDA Jurisdiction</a>
                    </h5>
                </div>

                {{-- Deligation of Powers --}}
                <div class="flex flex-row  items-center p-3 hover:shadow-lg" style="background-color: #627D98">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    <h5 class="ml-2 text-white font-bold "><a href="#">Deligation of Powers</a></h5>
                </div>

                {{-- Master Plans --}}
                <div class="flex flex-row  items-center bg-yellow-400 p-3 hover:shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                    </svg>
                    <h5 class="ml-2 text-white font-bold "><a href="#">Master Plans</a></h5>
                </div>
                {{-- ILUP Plans --}}
                <div class="flex flex-row  items-center p-3 hover:shadow-lg" style="background-color:#D64545">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                    </svg>
                    <h5 class="ml-2 text-white font-bold "><a href="#">ILUP Plans</a></h5>
                </div>
                {{-- Layout Rules's --}}
                <div class="flex flex-row  items-center bg-purple-400 p-3 hover:shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                    <h5 class="ml-2 text-white font-bold "><a href="{{ route('layoutrules') }}">Layout Rules</a></h5>
                </div>

                {{-- Building Rules's --}}
                <div class="flex flex-row  items-center  p-3 hover:shadow-lg" style="background-color:#94C843">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                    <h5 class="ml-2 text-white font-bold "><a href="{{ route('buildingrules') }}">Building Rules</a></h5>
                </div>

                {{-- ULB's --}}
                <div class="flex flex-row  items-center p-3 hover:shadow-lg" style="background-color: #1992D4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-5 w-5" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                    </svg>
                    <h5 class="ml-2 text-white font-bold "><a href="{{ route('ulbs') }}">Urban Local Bodies</a></h5>
                </div>

            </div>
            <div class="w-full sm:w-2/4 p-2 bg-gray-100">
                <x-anuda.slideshow />
            </div>
            <div class="w-full sm:w-1/4 p-2 flex justify-center bg-gray-100">
                <div class="flex flex-col justify-center  p-2">
                    <div class="m-2 flex flex-col justify-center items-center bg-white p-1 py-2">
                        <img src="{{ asset('images/srilakshmi.jpg') }}" class="object-contain h-20 w-20 rounded-full">
                        <p class="text-center text-sm text-pink-600 font-bold">Smt Y. Sri Lakshmi, I.A.S</p>
                        <p class="text-center text-xs">Special Chief Secretary to Govt, MA & UD</p>
                    </div>
                    <div class="m-2 flex flex-col justify-center items-center bg-white p-1 py-2">
                        <img src="{{ asset('images/chairperson.jpeg') }}" class="object-contain h-20 w-20">
                        <p class="text-center text-sm text-pink-600 font-bold">Sri Singasani Guru Mohan</p>
                        <p class="text-center text-xs  font-bold">Chairperson</p>
                        <p class="text-center text-xs">Annamayya Urban Development Authority</p>
                    </div>
                    <div class="m-2 flex flex-col justify-center items-center bg-white p-1 py-2">
                        <img src="{{ asset('images/vc_anuda.jpeg') }}" class="object-contain h-20 w-20">
                        <p class="text-center text-sm text-pink-600 font-bold">Sri Y.O.Nandan, B.Tech, M.Sc,</p>
                        <p class="text-center text-xs  font-bold">Vice Chairperson</p>
                        <p class="text-center text-xs">Annamayya Urban Development Authority</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- Boxes --}}
        <div class="p-4 font-semibold ">
            <div class="flex flex-col sm:flex-row justify-center space-y-2 sm:space-x-2">
                {{-- Approved Buildings --}}

                <div class="flex w-full sm:flex-1 flex-col justify-center items-center p-6 text-white rounded-md hover:shadow-lg"
                    style="background-color:#399709">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-10 w-10" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h4 class="text-xl p-1 text-center"><a href="{{ route('apls') }}">Approved Layouts</a></h4>
                </div>
                {{-- Approved Buildings --}}
                <div class="flex w-full sm:flex-1 flex-col justify-center items-center p-6 text-white rounded-md hover:shadow-lg"
                    style="background-color:#2DCCA7">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-10 w-10" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    <h4 class="text-xl p-1 text-center"><a href="{{ route('abls') }}">Approved Buildings</a></h4>
                </div>
                {{-- Unauthorized layouts --}}
                <div class="flex w-full sm:flex-1 flex-col justify-center items-center p-6 text-white rounded-md hover:shadow-lg"
                    style="background-color:#F7C948">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-10 w-10" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                    </svg>
                    <h4 class="text-xl p-1 text-center"><a href="{{ route('uals') }}">Unauthorized Layouts</a></h4>
                </div>
                {{-- LTP --}}
                <div class="flex w-full sm:flex-1 flex-col justify-center items-center p-6 text-white rounded-md hover:shadow-lg"
                    style="background-color:#F86A6A">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-10 w-10" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                    </svg>
                    <h4 class="text-xl p-1 text-center"><a href="{{ route('ltps') }}">Licensed Technical Persons</a>
                    </h4>
                </div>
                {{-- LRS --}}
                <div class="flex w-full sm:flex-1 flex-col justify-center items-center p-6 text-white rounded-md hover:shadow-lg"
                    style="background-color:#127FBF">


                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-10 w-10" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <h4 class="text-xl p-1">LRS</h4>
                </div>

            </div>

        </div>


        {{-- About Section --}}
        <div class="m-2">
            <hr />

            <div class="border border-gray-200 p-6 m-6">
                <h2 class="text-2xl font-bold p-3 text-indigo-700">About ANUDA</h2>
                <p class="p-2 text-sm sm:text-xl leading-loose sm:leading-relaxed sm:p-4 sm:text-justify">
                    ANUDA will be governed by under Andhra Pradesh Metropolitan Region and Urban Development Authorities Act
                    2016 with the objective of achieving orderly (planned) growth and environmental upgradation wherever
                    necessary. For this purpose, ANUDA intends to prepare a master plan covering the entire limits of
                    5392.26 Sq.kms. The population of ANUDA region as per Census 2011 is 18,39,269 covering 339 Villages and
                    10 Ulb’s
                    (Kadapa Municipal Corporation, Proddatur Municipality, Rayachoty Municipality, Mydukur Municipality,
                    Badvel
                    Municipality, Pulivendula Municipality, Rajampeta Municipality , Jammalamadugu Nagara Panchayat,
                    Yerraguntla Nagara
                    Panchayat & Kamalapuram Nagara Panchayat )
                </p>
            </div>
        </div>
        {{-- Latest Updates and Press Releases --}}

        <div class="m-2">
            <div class="flex flex-col sm:flex-row px-6">
                <div class="flex-1 border border-gray-200 m-2">
                    <h3 class="text-white p-4 rounded-sm text-center font-bold" style="background-color:#9446ED">Latest
                        Updates</h3>
                    <p class="p-3">
                        @if (!$updates->isEmpty())
                            <ol class="m-2 p-2 list-decimal bg-yellow-100">
                                @foreach ($updates as $update)
                                    <li class="flex items-center mr-2 mb-2"><a
                                            href="/storage/uploads/{{ $update->filelink }}">{{ $update->title }}</a>
                                    </li>
                                @endforeach
                            </ol>
                        @else
                            No Updates
                        @endif

                    </p>
                </div>
                <div class="flex-1 border border-gray-200 m-2">
                    <h3 class="text-white p-4 rounded-sm text-center font-bold" style="background-color:#099AA4">Press
                        Releases</h3>
                    <p class="p-3">
                        @if (!$news->isEmpty())
                            <ol class="m-2 p-2  bg-yellow-100">
                                @foreach ($news as $item)
                                    <li class="flex items-center mr-2 mb-2"><a
                                            href="/storage/uploads/{{ $item->filelink }}">{{ $item->title }}</a>
                                    </li>
                                @endforeach
                            </ol>
                        @else
                            No Updates
                        @endif
                    </p>
                </div>
            </div>

        </div>




    </div>
@endsection

@push('styles')
    {{-- Slideshow styles --}}
    <style>
        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
            background-color: #717171
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }
    </style>
@endpush

@push('scripts')
    {{-- Slideshow script --}}
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function(event) {
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides")
                //alert(document.getElementsByClassName('mySlides').length)
                console.log(slides.length)
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 4000); // Change image every 2 seconds
            }
        })
    </script>
@endpush
