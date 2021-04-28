@extends('layouts.guestlayout')

@section('content')
    <div class="container mx-auto">
      <h1 class="text-sm sm:text-xl text-center py-2 bg-gray-100 mx-2 sm:my-3 font-bold">Annamaiah Urban Development Authority (ANUDA) - Layout Rules </h1> 
        


<div class="flex sm:mt-4 justify-center" style="height:500px">
    <object data="{{asset('pdf/layoutrulesgo275.pdf')}}" type="application/pdf" width="100%" height="100%">
  <p>Your web browser doesn't have a PDF plugin.
  Instead you can <a href="{{asset('pdf/layoutrulesgo275.pdf')}}">click here to
  download the PDF file.</a></p>
</object>
   

</div>



    </div>
@endsection