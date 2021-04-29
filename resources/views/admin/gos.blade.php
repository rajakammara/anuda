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

                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($gos as $go)
                                                <tr>
                                                    <td class="px-3 py-4 whitespace-nowrap">
                                                        {{ $go->id }}
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
                                                            <a href="{{ asset('pdf/formationGO.pdf') }}">Download</a>
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
