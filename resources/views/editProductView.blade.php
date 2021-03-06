@extends('layouts.master')

@section('title')
AGTEL Edit - Product
@stop

@section('content')
@if(count($errors) > 0)
   <ul>
       @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
       @endforeach
   </ul>
@endif


 <h3>Edit Product</h3>
 {!! Form::open(array('method' => 'post', 'class' => 'form', 'enctype' => 'multipart/form-data',)) !!}

 <div class="form-group">
     {!! Form::label('Product Title') !!}
     {!! Form::text('title', $product->title,
         array('required',
               'class'=>'form-control')) !!}
 </div>
 <div class="form-group">
     {!! Form::label('Add a description') !!}
     {!! Form::textarea('description', $product->description,
         array('required',
               'class'=>'form-control')) !!}
 </div>

 <div class="form-group">
     {!! Form::label('Upload a New Image') !!}
     {!! Form::file('file', null,
         array('required',
               'class'=>'form-control')) !!}
 </div>

 <div class="form-group">
     {!! Form::submit('Save to data base!',
       array('class'=>'btn btn-primary')) !!}
 </div>
 {!! Form::close() !!}
@stop
