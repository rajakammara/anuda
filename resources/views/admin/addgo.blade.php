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
                    <a href="#" class="p-2 bg-gray-800 text-gray-100 rounded-md hover:shadow-lg">Go Back</a>
                    <div class="flex justify-center"><x-auth-validation-errors class="mt-2"/></div>
                    <div class="sm:mt-4">
                        <form class="" method="POST" action="{{route('admin-gos.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="flex flex-row items-center space-x-2">
                                <div class="w-1/4">
                                    <h3 class="font-semibold text-right">GO Number</h3>
                                </div>
                                <div class="w-2/4">
                                    <input type="text" name="gonumber" value="{{old('gonumber')}}"
                                        class="focus:border-gray-100 rounded-md p-2 m-2 w-full" />
                                    </div>
                            </div>

                            <div class="flex flex-row items-center space-x-2">
                                <div class="w-1/4">
                                    <h3 class="font-semibold text-right">GO Description</h3>
                                </div>
                                <div class="w-2/4">
                                    <textarea name="godesc" class="focus:border-gray-100 rounded-md m-2 w-full">{{old('godesc')}}</textarea>
                                </div>
                            </div>

                            <div class="flex flex-row items-center space-x-2">
                                <div class="w-1/4">
                                    <h3 class="font-semibold text-right">Go Attachment</h3>
                                </div>
                                <div class="w-2/4">
                                    <input type="file" name="gofile"
                                        class="focus:border-gray-100 rounded-md p-2 m-2 w-full" />
                                    </div>
                            </div>
                            <div class="flex flex-row items-center space-x-2">
                                <div class="w-1/4">
                                   
                                </div>
                                <div class="w-2/4"><input type="submit" value="Add Go"
                                        class="hover:shadow-xl bg-blue-600 text-white focus:border-gray-100 rounded-md p-2 m-2 w-full" /></div>
                            </div>
                            


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
