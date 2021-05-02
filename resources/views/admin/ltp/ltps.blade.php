<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Licensed Technical Persons') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <a href="{{route('admin-ltps.create')}}" class="p-2 bg-gray-800 text-gray-100 rounded-md hover:shadow-lg">Add
            LTP</a>
          @if($status = session('status'))
          <div class="flex justify-center m-3 font-medium text-xl text-green-600">
            {{ $status }}
          </div>
          @endif
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
                          Name
                        </th>
                        <th scope="col"
                          class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
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

                        <th scope="col"
                          class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                          Actions
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
                       
                        <td class="px-3 py-4 ">
                          <span
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-blue-800">
                            <a href="{{ route('admin-ltps.edit',$ltp->id) }}">Edit</a>
                          </span>

                          <span
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-red-800">
                            <form id="godeleteform" action="{{route('admin-ltps.destroy',$ltp->id)}}" method="POST">
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
          {{ $ltps->links() }}
        </div>
      </div>
    </div>
  </div>
</x-app-layout>