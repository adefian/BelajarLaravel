@extends('layouts.admin')

@section('content')

   


    <h1><i>Barang</i></h1>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Type</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Created</th>
                <th>Updated</th>

            </tr>
        </thead>

        <tbody>
            @if($barangs)

                @foreach($barangs as $barang)

                <tr>
                    <td>{{$barang->id}}</td>
                    <td><img height="50" src="{{$barang->photo ? $barang->photo->file : 'http://placehold.it/400x400'}}"></td>
                    <td><a href="/admin/barangs/{{$barang->id}}/edit">{{$barang->nama}}</a></td>
                    <td>{{$barang->type == 1 ? 'Terbaru' : 'Lama'}}</td>
                    <td>{{$barang->harga}}</td>
                    <td>{{$barang->jumlah}}</td>
                    <td>{{$barang->created_at->diffForHumans()}}</td>
                    <td>{{$barang->updated_at}}</td>
                </tr>

                @endforeach

            @endif

        </tbody>
    </table>

@endsection