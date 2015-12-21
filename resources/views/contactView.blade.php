@extends('layouts.master')

@section('title')
AGTEL
@stop


@section('content')
<h3>Contact Formulary</h3>
@if(count($errors) > 0)
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif



{!! Form::open(array('method' => 'post', 'class' => 'form', 'enctype' => 'multipart/form-data',)) !!}

<div class="form-group">
    {!! Form::label('First Name') !!}
    {!! Form::text('first_name', null,
    array('required',
    'class'=>'form-control',
    'placeholder'=>'First Name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Last Name') !!}
    {!! Form::text('last_name1', null,
    array('required',
    'class'=>'form-control',
    'placeholder'=>'Last Name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Last Name') !!}
    {!! Form::text('last_name2', null,
    array('required',
    'class'=>'form-control',
    'placeholder'=>'Aditional Last Name')) !!}
</div>

<div class="form-group">
    {!! Form::label('E-mail') !!}
    {!! Form::text('email', null,
    array('required',
    'class'=>'form-control',
    'placeholder'=>'email')) !!}
</div>


<div class="form-group">
    {!! Form::label('Phone Numer') !!}
    {!! Form::text('phone_number1', null,
    array('required',
    'class'=>'form-control',
    'placeholder'=>'Land Line')) !!}
</div>

<div class="form-group">
    {!! Form::label('Phone Numer') !!}
    {!! Form::text('phone_number2', null,
    array('required',
    'class'=>'form-control',
    'placeholder'=>'mobile phone')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your message') !!}
    {!! Form::textarea('message', null,
    array('required',
    'class'=>'form-control',
    'placeholder'=>'Add a Message')) !!}
</div>


<div class="form-group">
    {!! Form::submit('Send Us an email!',
    array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}


@stop
