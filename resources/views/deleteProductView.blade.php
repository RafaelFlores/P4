@extends('layouts.master')

@section('title')
AGTEL
@stop

@section('content')
@if(count($errors) > 0)
   <ul>
       @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
       @endforeach
   </ul>
@endif


 <h3>Delete</h3>
 <p>
     Are you sure you want to delete <em>{{$product->title}}</em>?
 </p>
 <p>
     {!! Html::link('/doDeleteProduct/' . $product->id , 'Yes') !!}
 </p>
 <p>
     {!! Html::link('/catalog', 'No') !!}
 </p>




@stop
