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
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($anggotas as $anggota)
            <tr>
            <th scope="row">{{$anggota->id}}</th>
                <td>{{ $anggota->nama }}</td>
                <td>{{ $anggota->nomor_identifikasi }}</td>
                <td>{{ $anggota->alamat }}</td>
                <td>{{ $anggota->nomor_telepon }}</td>
                <td>{{ $anggota->tanggal_bergabung }}</td>
                <td>{{ $anggota->status_keanggotaan }}</td>
                <td nowrap>
                    <a href="{{route('anggota.edit' , $anggota->id )}}"class="btn btn-sm btn-warning">edit</a>
                    <form action="{{route('anggota.destroy' , $anggota->id )}}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                    <a href="{{route('anggota.show' , $anggota->id )}}" class = " btn btn-sm btn-info">Show</a>
                </td>
            </tr>
            @endforeach
            @include('sweetalert::alert')
        </tbody>
    </table>
</div>
@endsection
