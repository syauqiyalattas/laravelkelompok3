@extends('layouts.main')

@section('content')
<form action="{{ route('anggota.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group p-3">
        <label>Nama Lengkap</label>
        <input type="name" name='nama' class="form-control" placeholder="Masukan Nama Lengkap">
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group p-3">
        <label>Nomor Identifikasi</label>
        <input type="name" name='nomor_identifikasi' class="form-control" placeholder="Masukan Nomor Identifikasi">
        @error('nomor_identifikasi')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group p-3">
        <label>Alamat</label>
        <input type="name" name='alamat' class="form-control" placeholder="Masukan Alamat">
        @error('alamat')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group p-3">
        <label>Nomor Telepon</label>
        <input type="name" name='nomor_telepon' class="form-control" placeholder="Masukan Nomor Telepon">
        @error('nomor_telepon')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group p-3">
        <label>Tanggal Bergabung</label>
        <input type="date" name='tanggal_bergabung' class="form-control">
        @error('tanggal_bergabung')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group p-3">
        <label>Status Keanggotaan</label>
        <select name="status_keanggotaan" class="form-control">
            <option value="Aktif">Aktif</option>
            <option value="Tidak Aktif">Tidak Aktif</option>
        </select>
        @error('status_keanggotaan')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="p-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection
