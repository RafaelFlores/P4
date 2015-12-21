@extends('layouts.master')

@section('title')
AGTEL Confirm Delete
@stop

@section('content')
@if(count($errors) > 0)
   <ul>
       @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
       @endforeach
   </ul>
@endif


 <h3>Delete Post</h3>
 <p>
     Are you sure you want to delete <em>{{$post->title}}</em>?
 </p>
 <p>
     {!! Html::link('/doDeletePost/' . $post->id , 'Yes') !!}
 </p>
 <p>
     {!! Html::link('/blog', 'No') !!}
 </p>




@stop
