<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Scrolling Text') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- <a href="{{ route('admin-gos.create') }}"
                        class="p-2 bg-gray-800 text-gray-100 rounded-md hover:shadow-lg">Add GO</a> --}}
                    @if ($status = session('status'))
                        <div class="flex justify-center m-3 font-medium text-xl text-green-600">
                            {{ $status }}
                        </div>
                    @endif
                    @if (!$scrollText->isEmpty())
                        {{-- Table --}}
                        <div class="flex flex-col sm:mt-4">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <form method="POST"
                                            action="{{ route('admin-scrolltext.update', $scrollText[0]->id) }}">
                                            @csrf
                                            @method('PATCH')
                                            <textarea class="w-full" name="scrolling_text" id="" rows="5" required>{{ $scrollText[0]->scrolling_text }}</textarea>
                                            <div class="w-full"><input type="submit" value="Update Status"
                                                    class="hover:shadow-xl bg-blue-600 text-white focus:border-gray-100 rounded-md p-2 m-2 w-full" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <h1 class="m-3">No Records to Display</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
