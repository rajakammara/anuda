@extends('layouts.guestlayout')

@section('content')
<div class="container mx-auto">
  <h1 class="text-sm sm:text-xl text-center py-2 bg-gray-100 mx-2 sm:my-3 font-bold">Annamaiah Urban Development
    Authority (ANUDA) - Licensed Technical Persons </h1>
  @if (!$ltps->isEmpty())
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
                  Name
                </th>
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                  LTP Type
                </th>
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                  Registration Number
                </th>
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                  Address
                </th>
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                  Contact
                </th>
  
                
  
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach ($ltps as $index=>$ltp)
              <tr>
                <td class="px-3 py-4 whitespace-nowrap">
                  {{$index + $ltps->firstItem()}}
                </td>
                <td class="px-3 py-4 ">
                  {{ $ltp->name }}
                </td>
                <td class="px-3 py-4 ">
                  @if ($ltp->type=="str_engineer")
                  Structural Engineer
                  @else
                  {{ ucfirst($ltp->type) }}
                  @endif
                </td>
                <td class="px-3 py-4 ">
                  {{ $ltp->reg_number }}
                </td>
                <td class="px-3 py-4 ">
                  {{ $ltp->address }}
                </td>
                <td class="px-3 py-4 ">
                  {{ $ltp->phone }}
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
  {{ $ltps->links() }}
  @else
  <h1 class="m-3">No Records to Display</h1>
  @endif


</div>
@endsection