@extends('layouts.admin')

@section('content')

<div class="row">

      <div class="col-sm-3">
        
        <img src="{{$barang->photo ? $barang->photo->file : 'http://placehold.it/400x400'}}" class="img-responsive img-rounded">

      </div>

      <div class="col-sm-9">

            <h1><i>Edit Barang</i></h1>

            {!! Form::model($barang,['method'=>'PATCH', 'action'=> ['barangController@update',$barang->id],'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('nama', 'Nama Barang :') !!}
                {!! Form::text('nama', null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('type', 'Type :') !!}
                {!! Form::select('type', array(1 => 'Terbaru',0 => 'Lama'), null,['class'=>'form-control']) !!}
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
                {!! Form::submit('Edit', ['class'=>'btn btn-warning pull-right']) !!}
            </div>

        </div>
    </div>

    {!! Form::close() !!}


            <form action="{{ route('barangs.destroy', $barang->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger  pull-right" type="submit">Delete</button>
            </form>

@include('includes.form_error')

@stop