@extends('layouts.guestlayout')

@section('content')
<div class="container mx-auto">
  <h1 class="text-sm sm:text-xl text-center py-2 bg-gray-100 mx-2 sm:my-3 font-bold">Annamaiah Urban Development
    Authority (ANUDA) - Approved Buildings </h1>
  @if (!$abls->isEmpty())
  {{-- Table --}}
  <div class="flex flex-col sm:mt-4">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                  Sl.No
                </th>
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                  Locality
                </th>
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                  Mandal
                </th>
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                  Survey No
                </th>
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                  Extent in M<sup>2</sup>
                </th>
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                  Permit No.
                </th>
  
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                  Proceedings
                </th>
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                  Drawings
                </th>
  
               
  
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach ($abls as $index=>$abl)
              <tr>
                <td class="px-3 py-4 whitespace-nowrap">
                  {{$index + $abls->firstItem()}}
                </td>
                <td class="px-3 py-4 ">
                  {{ $abl->location }}
                </td>
                <td class="px-3 py-4 ">
                  {{ $abl->mandal }}
                </td>
                <td class="px-3 py-4 ">
                  {{ $abl->surveyno }}
                </td>
                <td class="px-3 py-4 ">
                  {{ $abl->extent }}
                </td>
                <td class="px-3 py-4 ">
                  {{ $abl->permitno }}
                </td>
  
                <td class="px-3 py-4 whitespace-nowrap">
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    <a href="{{ asset('storage/uploads/' . $abl->proceedings) }}" target="_blank">Proceedings</a>
                  </span>
                </td>
                <td class="px-3 py-4 whitespace-nowrap">
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    <a href="{{ asset('storage/uploads/' . $abl->drawings) }}" target="_blank">Drawings</a>
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
  
  {{-- .Table --}}
  {{ $abls->links() }}
  @else
  <h1 class="m-3">No Records to Display</h1>
  @endif


</div>
@endsection