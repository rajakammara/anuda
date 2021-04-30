<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('GOs') }}
        </h2>
    </x-slot>
   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <a href="{{route('admin-gos.create')}}" class="p-2 bg-gray-800 text-gray-100 rounded-md hover:shadow-lg">Add GO</a>
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
                                                    GO Name/Number
                                                </th>
                                                <th scope="col"
                                                    class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                                    GO Description
                                                </th>
                                                <th scope="col"
                                                    class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                                    Download
                                                </th>
                                                
                                                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                                    Actions
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($gos as $index=>$go)
                                                <tr>
                                                    <td class="px-3 py-4 whitespace-nowrap">
                                                        {{$index + $gos->firstItem()}}
                                                    </td>
                                                    <td class="px-3 py-4 ">
                                                        {{ $go->gonumber }}
                                                    </td>
                                                    <td class="px-3 py-4 ">
                                                        {{ $go->description }}
                                                    </td>
                                                    <td class="px-3 py-4 whitespace-nowrap">
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            <a href="{{ asset('storage/uploads/' . $go->filelink) }}" target="_blank">Download</a>
                                                        </span>
                                                    </td>
                                                    <td class="px-3 py-4 ">
                                                       <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-blue-800">
                                                        <a href="{{ route('admin-gos.edit',$go->id) }}">Edit</a>
                                                       </span>

                                                       <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-red-800">
                                                        <form id="godeleteform" action="{{route('admin-gos.destroy',$go->id)}}" method="POST">
                                                            @csrf
                                                            @method("DELETE")
                                                        <button type="submit" onclick="return confirm('Are you sure you wish to delete?');" >Delete</button>
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
                    {{ $gos->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
