@extends('layouts.master')

@section('title')
AGTEL Add Post
@stop

@section('content')

 <h3>Add Post to Blog</h3>
 @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

 {!! Form::open(array('method' => 'post', 'class' => 'form', 'enctype' => 'multipart/form-data',)) !!}

 <div class="form-group">
     {!! Form::label('Post Title') !!}
     {!! Form::text('title', null,
         array('required',
               'class'=>'form-control',
               'placeholder'=>'Product Title')) !!}
 </div>
 <div class="form-group">
     {!! Form::label('Add a description') !!}
     {!! Form::textarea('description', null,
         array('required',
               'class'=>'form-control',
               'placeholder'=>'Add a Description')) !!}
 </div>

 <div class="form-group">
     {!! Form::label('Upload an Image') !!}
     {!! Form::file('file', null,
         array('required',
               'class'=>'btn btn-primary')) !!}
 </div>

 <div class="form-group">
     {!! Form::label('Post link to video') !!}
     {!! Form::text('link_to_video', null,
         array('required',
               'class'=>'form-control',
               'placeholder'=>'Link to video')) !!}
 </div>

 <div class="form-group">
     {!! Form::submit('Save to data base!',
       array('class'=>'btn btn-primary')) !!}
 </div>
 {!! Form::close() !!}

@stop
