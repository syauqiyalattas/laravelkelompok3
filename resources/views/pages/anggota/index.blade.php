@extends('layouts.main')

@section('content')
<div class="p-3">
    <a href="{{route('anggota.create')}}" class="btn btn-primary my-3">Tambah Data Anggota</a>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Nomor Identifikasi</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Tanggal Bergabung</th>
                <th scope="col">Status Keanggotaan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($anggotas as $key)
            <tr>
            <th scope="row">{{$key->id}}</th>
                <td>{{ $key->nama }}</td>
                <td>{{ $key->nomor_identifikasi }}</td>
                <td>{{ $key->alamat }}</td>
                <td>{{ $key->nomor_telepon }}</td>
                <td>{{ $key->tanggal_bergabung }}</td>
                <td>{{ $key->status_keanggotaan }}</td>
            </tr>
            @endforeach
            @include('sweetalert::alert') 
        </tbody>
    </table>
</div>
@endsection