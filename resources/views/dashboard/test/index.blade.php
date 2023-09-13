<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@include('fragments.subview')



<?php if(true) {echo $name ?>
asasasasa

<?php
}?>

@if($name=="Adres")
hola
@else 
no es true
@endif 

@foreach ($array as $item)
   <div><p>{{ $item }}</p></div> 
 
@endforeach
<hr>
@forelse ($array as $item)
    <div>
        <p>*{{ $item }}</p>
    </div> 
 
 
   @empty
no hay data

@endforelse


    <h1>{{$name}}</h1>
    <!-- {{$age}} -->
    {{-- {!! $html !!} --}}
    
</body>
</html>
