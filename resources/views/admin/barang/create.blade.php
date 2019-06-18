@extends('layouts.admin')

@section('content')

	<h1><i>Tambah Barang</i></h1>

    {!! Form::open(['method'=>'POST', 'action'=> 'barangController@store','files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('nama', 'Nama Barang :') !!}
        {!! Form::text('nama', null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('type', 'Type :') !!}
        {!! Form::select('type', array(1 => 'Terbaru',0 => 'Lama'), 0,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('harga', 'Harga :') !!}
        {!! Form::text('harga', null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('jumlah', 'Jumlah :') !!}
        {!! Form::text('jumlah', null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Foto Barang :') !!}
        {!! Form::file('photo_id', ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Tambah', ['class'=>'btn btn-success']) !!}
    </div>

    {!! Form::close() !!}

@include('includes.form_error')

@stop