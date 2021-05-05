@extends('layouts.guestlayout')

@section('content')
<div class="container mx-auto">
  <h1 class="text-sm sm:text-xl text-center py-2 bg-gray-100 mx-2 sm:my-3 font-bold">Annamaiah Urban Development
    Authority
    (ANUDA) - Contact Us </h1>

  <!-- This example requires Tailwind CSS v2.0+ -->

  <div class="flex flex-col sm:mt-4">
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
                  Name
                </th>
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                  Designation
                </th>
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                  Mobile No.
                </th>
              

              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach ($contacts as $contact)
              <tr>
                <td class="px-3 py-4 whitespace-nowrap">
                  {{$loop->iteration}}
                </td>
                <td class="px-3 py-4 ">
                  {{ $contact[0] }}
                </td>
                <td class="px-3 py-4 ">
                  {{ $contact[1] }}
                </td>
                <td class="px-3 py-4 ">
                  {{ $contact[2] }}
                </td>
              </tr>
              @endforeach


            </tbody>
          </table>


        </div>



      </div>
    </div>
  </div>

<div class="m-6">
  <h1 class="text-2xl font-bold "><span class="border-b-2 border-gray-800">Office Address:</span></h1>
  <p class="p-2 leading-6 text-lg bg-gray-100 m-2">
    Door No. 36 / 263-29( upstair), <br/> 
    Reddy Colony, <br/>
    Near Adithya Kalyanamandapam,<br/>
    Chinna chowk, Old Bypass Road , <br/>
    Kadapa – 516 002, <br/>
    YSR District, Andhra Pradesh. <br/>
    Mail id: audaoffice@gmail.com
  </p>
</div>



</div>
@endsection