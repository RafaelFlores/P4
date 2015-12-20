@extends('layouts.master')

@section('title')
AGTEL
@stop

@section('content')

 <h3>Edit</h3>
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
