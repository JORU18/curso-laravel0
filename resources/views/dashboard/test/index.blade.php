@extends('layout.master')
@section('content')

@include('fragments.subview')

@forelse ($post as $item)
    <div>
        <p>*{{ $item }}</p>
 {{$name}}
    </div> 
 
 
   @empty
no hay data



@endforelse

@endsection