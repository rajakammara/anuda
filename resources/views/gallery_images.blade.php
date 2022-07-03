@extends('layouts.guestlayout')

@section('content')
    <div class="container mx-auto my-5">
        <h1 class="text-sm sm:text-xl text-center py-2 bg-gray-100 mx-2 sm:my-3 font-bold">Annamaiah Urban Development
            Authority
            (AUDA) - Gallery </h1>



        {{-- start --}}



        @foreach ($images_data->chunk(3) as $items)
            <div class="flex flex-row justify-center">
                @foreach ($items as $image)
                    <div class="p-2">
                        <a href="{{ asset('storage/uploads/' . $image->filelink) }}" target="__blank">
                            <img src="{{ asset('storage/uploads/' . $image->filelink) }}" class="h-48 w-48" />
                        </a>
                    </div>
                @endforeach
            </div>
        @endforeach

        {{-- end --}}

        <!-- This example requires Tailwind CSS v2.0+ -->


    </div>
@endsection

@push('stylesheets')
@endpush

@push('javascript')
@endpush
