@extends('layouts.guestlayout')

@section('content')
<div class="container mx-auto">
  <h1 class="text-sm sm:text-xl text-center py-2 bg-gray-100 mx-2 sm:my-3 font-bold">Annamaiah Urban Development
    Authority (ANUDA) - Unauthorized Layouts </h1>
  @if (!$uals->isEmpty())
  
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
                  Mandal
                </th>
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                  Village
                </th>
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                  Owner
                </th>
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                  Survey No.
                </th>
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                  Extent
                </th>
  
                
  
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach ($uals as $index=>$ual)
              <tr>
                <td class="px-3 py-4 whitespace-nowrap">
                  {{$index + $uals->firstItem()}}
                </td>
                <td class="px-3 py-4 ">
                  {{ $ual->mandal }}
                </td>
                <td class="px-3 py-4 ">
  
                  {{ $ual->village }}
  
                </td>
                <td class="px-3 py-4 ">
                  {{ $ual->owner }}
                </td>
                <td class="px-3 py-4 ">
                  {{ $ual->surveyno }}
                </td>
                <td class="px-3 py-4 ">
                  {{ $ual->extent }}
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
  {{ $uals->links() }}
  @else
  <h1 class="m-3">No Records to Display</h1>
  @endif


</div>
@endsection