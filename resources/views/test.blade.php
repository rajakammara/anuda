@for ($i = 0; $i < count($contacts); $i++)
   {{$contacts[$i][0]}}   
@endfor

<hr>

@foreach ($contacts as $item)
    {{$item[0]}}  {{$item[1]}}
@endforeach