@extends('layouts.admin')

@section('judul')
Data Genre
@endsection
<!-- Page Heading -->

@section('tabel')

<div class="p-3">
    {{-- Kelola Genre --}}
    <a href="/genre/create" class="btn btn-primary my-3">Tambah Genre</a>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Genre</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($genre as $key => $value)
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$value->nama_genre}}</td>
                <td class="mr-3">
                    <a href="/genre/{{$value->id}}" class="btn btn-info">Detail </a>
                    <a href="/genre/{{$value->id}}/edit" class="btn btn-success">Edit</a>
                    <a href="/genre/ {{$value->id }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
                </td>/div>
            </tr>
            {{--tidak ada data  --}}
        </tbody>
        @empty
        <tr colspan="6">
            <td>No data</td>
        </tr>
        @endforelse
    </table>
</div>
@endsection


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css" />