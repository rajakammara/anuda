@extends('layouts.guestlayout')

@section('content')
    <div class="container mx-auto h-screen">
       
        <!-- This example requires Tailwind CSS v2.0+ -->
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
                GO Description
              </th>
              <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                Download
              </th>
             
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr>
              <td class="px-3 py-4 whitespace-nowrap">
                1
              </td>
              <td class="px-3 py-4 ">
                Formation of Annamayya Urban Development Authority (ANUDA) 
              </td>
              <td class="px-3 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  <a href="{{asset('pdf/formationGO.pdf')}}">Download</a>
                </span>
              </td>
              
            </tr>

             <tr>
              <td class="px-3 py-4 whitespace-nowrap">
                2
              </td>
              <td class="px-3 py-4 ">
                Appointment of Vice-Chairman for the newly constituted Urban Development Authorities 
              </td>
              <td class="px-3 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  <a href="{{asset('pdf/FACGO.pdf')}}">Download</a>
                </span>
              </td>
              
            </tr>

              <tr>
              <td class="px-3 py-4 whitespace-nowrap">
                3
              </td>
              <td class="px-3 py-4 ">
                 Constitution of Authority for the Development area of Annamaiah Urban Development Authority (ANUDA) 
              </td>
              <td class="px-3 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  <a href="{{asset('pdf/AuthorityGO.pdf')}}">Download</a>
                </span>
              </td>
              
            </tr>

            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>





    </div>
@endsection