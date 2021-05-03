<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Unauthorized Layouts') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <a href="{{route('admin-uals.create')}}" class="p-2 bg-gray-800 text-gray-100 rounded-md hover:shadow-lg">Add
            Unauthorized Layout</a>
          @if($status = session('status'))
          <div class="flex justify-center m-3 font-medium text-xl text-green-600">
            {{ $status }}
          </div>
          @endif
          @if (!$uals->isEmpty())              
         
          {{-- Table --}}
          <div class="flex flex-col sm:mt-4">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col"
                          class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                          Sl.No
                        </th>
                        <th scope="col"
                          class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                          Mandal
                        </th>
                        <th scope="col"
                          class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                          Village
                        </th>
                        <th scope="col"
                          class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                          Owner
                        </th>
                        <th scope="col"
                          class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                          Survey No.
                        </th>
                        <th scope="col"
                          class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                          Extent
                        </th>

                        <th scope="col"
                          class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                          Actions
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

                        <td class="px-3 py-4 ">
                          <span
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-blue-800">
                            <a href="{{ route('admin-uals.edit',$ual->id) }}">Edit</a>
                          </span>

                          <span
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-red-800">
                            <form id="godeleteform" action="{{route('admin-uals.destroy',$ual->id)}}" method="POST">
                              @csrf
                              @method("DELETE")
                              <button type="submit"
                                onclick="return confirm('Are you sure you wish to delete?');">Delete</button>
                            </form>

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
          {{ $uals->links() }}
          @else
          <h1 class="m-3">No Records to Display</h1>
          @endif
        </div>
      </div>
    </div>
  </div>
</x-app-layout>