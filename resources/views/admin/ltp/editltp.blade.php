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
          <a href="{{route('admin-ltps.index')}}" class="p-2 bg-gray-800 text-gray-100 rounded-md hover:shadow-lg">Go
            Back</a>
          <div class="flex justify-center">
            <x-auth-validation-errors class="mt-2" />
          </div>
          <div class="sm:mt-4">
            <form class="" method="POST" action="{{route('admin-ltps.update',$ltp->id)}}" enctype="multipart/form-data">
              @csrf
              @method("PATCH")
              <div class="flex flex-row items-center space-x-2">
                <div class="w-1/4">
                  <h3 class="font-semibold text-right">LTP Name</h3>
                </div>
                <div class="w-2/4">
                  <input type="text" name="ltpname" value="{{$ltp->name}}"
                    class="focus:border-gray-100 rounded-md p-2 m-2 w-full" />
                </div>
              </div>

              <div class="flex flex-row items-center space-x-2">
                <div class="w-1/4">
                  <h3 class="font-semibold text-right">LTP Type</h3>
                </div>
                <div class="w-2/4">
                  <select name="ltptype" class="focus:border-gray-100 rounded-md m-2 w-full">
                    <option disabled selected>Choose LTP Type</option>
                    <option value="architect" {{$ltp->type=="architect" ? "selected" : ""}}>Architect</option>
                    <option value="str_engineer" {{$ltp->type=="str_engineer" ? "selected" : ""}}>Structural Engineer</option>
                    <option value="engineer" {{$ltp->type=="engineer" ? "selected" : ""}}>Engineer</option>
                    <option value="surveyor" {{$ltp->type=="surveyor" ? "selected" : ""}}>Surveyor</option>
                    <option value="developer" {{$ltp->type=="developer" ? "selected" : ""}}>Developer</option>
                  </select>
                  
                </div>
              </div>

              <div class="flex flex-row items-center space-x-2">
                <div class="w-1/4">
                  <h3 class="font-semibold text-right">Registration Number</h3>
                </div>
                <div class="w-2/4">
                  <input type="text" name="reg_number" value="{{$ltp->reg_number}}" class="focus:border-gray-100 rounded-md p-2 m-2 w-full" />
                </div>
              </div>

              <div class="flex flex-row items-center space-x-2">
                <div class="w-1/4">
                  <h3 class="font-semibold text-right">Address</h3>
                </div>
                <div class="w-2/4">
                  <textarea name="address"
                    class="focus:border-gray-100 rounded-md m-2 w-full">{{$ltp->address}}</textarea>
                </div>
              </div>

              <div class="flex flex-row items-center space-x-2">
                <div class="w-1/4">
                  <h3 class="font-semibold text-right">Contact Number</h3>
                </div>
                <div class="w-2/4">
                  <input type="number" name="contact" value="{{$ltp->phone}}" class="focus:border-gray-100 rounded-md p-2 m-2 w-full" />
                </div>
              </div>

              <div class="flex flex-row items-center space-x-2">
                <div class="w-1/4">

                </div>
                <div class="w-2/4"><input type="submit" value="Edit LTP"
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