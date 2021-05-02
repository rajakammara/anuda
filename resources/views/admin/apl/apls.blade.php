<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Approved Layouts') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <a href="{{route('admin-apls.create')}}" class="p-2 bg-gray-800 text-gray-100 rounded-md hover:shadow-lg">Add
            Approved Layout</a>
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
                          Village / Mandal
                        </th>
                        <th scope="col"
                          class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                          Survey Number(s)
                        </th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                          Extent
                        </th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                          FLP No.
                        </th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                         Mortgage Plot Nos.
                        </th>
                        
                        <th scope="col"
                          class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                          Proceedings
                        </th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                          Drawings
                        </th>

                        <th scope="col"
                          class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                          Actions
                        </th>

                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      @foreach ($apls as $index=>$alp)
                      <tr>
                        <td class="px-3 py-4 whitespace-nowrap">
                          {{$index + $apls->firstItem()}}
                        </td>
                        <td class="px-3 py-4 ">
                          {{ $alp->village }}
                        </td>
                        <td class="px-3 py-4 ">
                          {{ $alp->surveyno }}
                        </td>
                        <td class="px-3 py-4 ">
                          {{ $alp->extent }}
                        </td>
                        <td class="px-3 py-4 ">
                          {{ $alp->flpno }}
                        </td>  
                        <td class="px-3 py-4 ">
                          {{ $alp->mortgageplotnos }}
                        </td>                      
                        <td class="px-3 py-4 whitespace-nowrap">
                          <span
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            <a href="{{ asset('storage/uploads/' . $alp->proceedings) }}" target="_blank">Proceedings</a>
                          </span>
                        </td>
                        <td class="px-3 py-4 whitespace-nowrap">
                          <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            <a href="{{ asset('storage/uploads/' . $alp->drawings) }}" target="_blank">Drawings</a>
                          </span>
                        </td>
                        <td class="px-3 py-4 ">
                          <span
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-blue-800">
                            <a href="{{ route('admin-apls.edit',$alp->id) }}">Edit</a>
                          </span>

                          <span
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-red-800">
                            <form id="apldeleteform" action="{{route('admin-apls.destroy',$alp->id)}}" method="POST">
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
          {{ $apls->links() }}
        </div>
      </div>
    </div>
  </div>
</x-app-layout>