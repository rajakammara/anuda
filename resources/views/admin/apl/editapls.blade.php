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
          <a href="{{route('admin-apls.index')}}" class="p-2 bg-gray-800 text-gray-100 rounded-md hover:shadow-lg">Go Back</a>
          <div class="flex justify-center">
            <x-auth-validation-errors class="mt-2" />
          </div>
          <div class="sm:mt-4">
            <form class="" method="POST" action="{{route('admin-apls.update',$apl->id)}}" enctype="multipart/form-data">
              @csrf
              @method("PATCH")
              <div class="flex flex-row items-center space-x-2">
                <div class="w-1/4">
                  <h3 class="font-semibold text-right">Village / Mandal</h3>
                </div>
                <div class="w-2/4">
                  <input type="text" name="village" value="{{$apl->village}}"
                    class="focus:border-gray-100 rounded-md p-2 m-2 w-full" />
                </div>
              </div>

              <div class="flex flex-row items-center space-x-2">
                <div class="w-1/4">
                  <h3 class="font-semibold text-right">Survey No(s)</h3>
                </div>
                <div class="w-2/4">
                  <textarea name="surveyno"
                    class="focus:border-gray-100 rounded-md m-2 w-full">{{$apl->surveyno}}</textarea>
                </div>
              </div>

              <div class="flex flex-row items-center space-x-2">
                <div class="w-1/4">
                  <h3 class="font-semibold text-right">Extent</h3>
                </div>
                <div class="w-2/4">
                  <input type="number" name="extent" value="{{$apl->extent}}" class="focus:border-gray-100 rounded-md p-2 m-2 w-full" />
                </div>
              </div>

              <div class="flex flex-row items-center space-x-2">
                <div class="w-1/4">
                  <h3 class="font-semibold text-right">FLP No.</h3>
                </div>
                <div class="w-2/4">
                  <input type="text" name="flpno" value="{{$apl->flpno}}"
                    class="focus:border-gray-100 rounded-md p-2 m-2 w-full" />
                </div>
              </div>

              <div class="flex flex-row items-center space-x-2">
                <div class="w-1/4">
                  <h3 class="font-semibold text-right">Mortgage Plot No.s</h3>
                </div>
                <div class="w-2/4">
                  <textarea name="plotnos" class="focus:border-gray-100 rounded-md m-2 w-full">{{$apl->mortgageplotnos}}</textarea>
                </div>
              </div>

              <div class="flex flex-row items-center space-x-2">
                <div class="w-1/4">
                  <h3 class="font-semibold text-right">Proceedings</h3>
                </div>
                <div class="w-2/4 flex">
                  <input type="file" value="Change File" name="proceedings"
                    class="focus:border-gray-100 rounded-md p-2 m-2 w-full" />
                  <a class="text-purple-600 m-2 p-2" href="{{asset("uploads/" . $apl->proceedings)}}">{{$apl->proceedings}}</a>
                </div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <div class="w-1/4">
                  <h3 class="font-semibold text-right">Drawings</h3>
                </div>
                <div class="w-2/4 flex">
                  <input type="file" value="Change File" name="drawings" class="focus:border-gray-100 rounded-md p-2 m-2 w-full" />
                  <a class="text-purple-600 m-2 p-2" href="{{asset("uploads/" . $apl->drawings)}}">{{$apl->drawings}}</a>
                </div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <div class="w-1/4">

                </div>
                <div class="w-2/4"><input type="submit" value="Edit Go"
                    class="hover:shadow-xl bg-blue-600 text-white focus:border-gray-100 rounded-md p-2 m-2 w-full" />
                </div>
              </div>



            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>