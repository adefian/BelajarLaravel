@extends('layouts.admin')

@section('content')

	<h1><i>Create User</i></h1>

    {!! Form::open(['method'=>'POST', 'action'=> '']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}}
        {!! Form::text('title', null,['class'=>'form-control']) !!}
    </div>
	
    <div class="form-group">
        {!! Form::submit('Created Post', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@stop