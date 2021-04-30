@extends('layouts.guestlayout')

@section('content')
    <div class="container mx-auto">
      <h1 class="text-sm sm:text-xl text-center py-2 bg-gray-100 mx-2 sm:my-3 font-bold">Annamaiah Urban Development Authority
        (ANUDA) - GOs </h1>
       
        <!-- This example requires Tailwind CSS v2.0+ -->
       
<div class="flex flex-col sm:mt-4 min-h-screen">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mb-2">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                Sl.No
              </th>
              <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                GO Name / Number
              </th>
              <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                GO Description
              </th>
              <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                Download
              </th>
             
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($gosval as $go)
            <tr>
              <td class="px-3 py-4 whitespace-nowrap">
                {{$loop->iteration}}
              </td>
              <td class="px-3 py-4 ">
                {{ $go->gonumber }}
              </td>
              <td class="px-3 py-4 ">
                {{ $go->description }}
              </td>
              <td class="px-3 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  <a href="{{ asset('storage/uploads/' . $go->filelink) }}" target="_blank">Download</a>
                </span>
              </td>
            </tr>
            @endforeach          

            
          </tbody>
        </table>

        
      </div>
        
      
     
    </div>
  </div>
</div>





    </div>
@endsection