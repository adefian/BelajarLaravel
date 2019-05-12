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

@extends('layouts.admin')

@section('content')

	<h1><i>Create User</i></h1>

    {!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name :') !!}
        {!! Form::text('name', null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email :') !!}
        {!! Form::email('email', null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id', 'Role :') !!}
        {!! Form::select('role_id',[''=>'Choose Options'], null,['class'=>'form-control']) !!}
    </div>
	
    <div class="form-group">
        {!! Form::label('is_active', 'Status :') !!}
        {!! Form::select('is_active', array(1 => 'Active',0 => 'Not Active'), 0,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@stop