<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if($status = session('status'))
                <div class="flex justify-center m-3 font-medium text-xl text-green-600">
                    {{ $status }}
                </div>
                @endif
                
                <div class="p-6 bg-white border-b border-gray-200" x-data={showpanel:false}>
                    Latest Updates <button class="bg-green-500 p-2 text-white" x-on:click="showpanel=!showpanel"><span x-show="!showpanel">Add Update</span>
                    <span x-show="showpanel">Close</span>
                    </button>
                    <div >
                        <div class="flex justify-center">
                            <x-auth-validation-errors class="mt-2" />
                        </div>
                        <div class="sm:mt-4" x-show="showpanel">
                            <form class="" method="POST" action="{{route('admin-lupdates.store')}}"
                                enctype="multipart/form-data">
                                @csrf
                               <div class="flex flex-row items-center space-x-2">
                                <div class="w-1/4">
                                    <h3 class="font-semibold text-right">Update Description</h3>
                                </div>
                                <div class="w-2/4">
                                    <textarea required name="title" class="focus:border-gray-100 rounded-md m-2 w-full">{{old('godesc')}}</textarea>
                                </div>
                            </div>
                               

                                <div class="flex flex-row items-center space-x-2">
                                    <div class="w-1/4">
                                        <h3 class="font-semibold text-right">Attachment (optional)</h3>
                                    </div>
                                    <div class="w-2/4">
                                        <input type="file" name="filelink"
                                            class="focus:border-gray-100 rounded-md p-2 m-2 w-full" />
                                    </div>
                                </div>
                                <div class="flex flex-row items-center space-x-2">
                                    <div class="w-1/4">

                                    </div>
                                    <div class="w-2/4"><input type="submit" value="Add Updates"
                                            class="hover:shadow-xl bg-blue-600 text-white focus:border-gray-100 rounded-md p-2 m-2 w-full" />
                                    </div>
                                </div>



                            </form>
                        </div>
                    </div>
                </div>
                <ol class="m-4 p-2 list-decimal bg-yellow-100">                    
                @foreach ($updates as $update)
                 <li class="flex items-center mr-2"><a href="{{$update->filelink}}">{{$update->title}}</a>
                 <form method="POST" enctype="multipart/form-data" action="{{route("admin-lupdates.destroy",$update->id)}}">
                    @csrf
                    @method("DELETE")
                    <button class="ml-2 text-red-500 text-2xl font-semibold" title="Delete">&times;</button>
                 </form>
                </li>               
                @endforeach
                </ol>



            </div>
        </div>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    @if($status = session('status_news'))
                    <div class="flex justify-center m-3 font-medium text-xl text-green-600">
                        {{ $status }}
                    </div>
                    @endif
                
                    <div class="p-6 bg-white border-b border-gray-200" x-data={showpanel:false}>
                        Press Releases <button class="bg-green-500 p-2 text-white" x-on:click="showpanel=!showpanel"><span x-show="!showpanel">Add
                                Press Release</span>
                            <span x-show="showpanel">Close</span>
                        </button>
                        <div>
                            <div class="flex justify-center">
                                <x-auth-validation-errors class="mt-2" />
                            </div>
                            <div class="sm:mt-4" x-show="showpanel">
                                <form class="" method="POST" action="{{route('admin-preleases.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="flex flex-row items-center space-x-2">
                                        <div class="w-1/4">
                                            <h3 class="font-semibold text-right">Press Release Description</h3>
                                        </div>
                                        <div class="w-2/4">
                                            <textarea required name="title"
                                                class="focus:border-gray-100 rounded-md m-2 w-full">{{old('godesc')}}</textarea>
                                        </div>
                                    </div>
                
                
                                    <div class="flex flex-row items-center space-x-2">
                                        <div class="w-1/4">
                                            <h3 class="font-semibold text-right">Attachment (optional)</h3>
                                        </div>
                                        <div class="w-2/4">
                                            <input type="file" name="filelink"
                                                class="focus:border-gray-100 rounded-md p-2 m-2 w-full" />
                                        </div>
                                    </div>
                                    <div class="flex flex-row items-center space-x-2">
                                        <div class="w-1/4">
                
                                        </div>
                                        <div class="w-2/4"><input type="submit" value="Add Press Release"
                                                class="hover:shadow-xl bg-blue-600 text-white focus:border-gray-100 rounded-md p-2 m-2 w-full" />
                                        </div>
                                    </div>
                
                
                
                                </form>
                            </div>
                        </div>
                    </div>
                    <ol class="m-4 p-2 list-decimal bg-yellow-100">
                        @foreach ($news as $item)
                        <li class="flex items-center mr-2"><a href="{{$item->filelink}}">{{$item->title}}</a>
                            <form method="POST" enctype="multipart/form-data" action="{{route("admin-preleases.destroy",$item->id)}}">
                                @csrf
                                @method("DELETE")
                                <button class="ml-2 text-red-500 text-2xl font-semibold" title="Delete">&times;</button>
                            </form>
                        </li>
                        @endforeach
                    </ol>
                
                
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>