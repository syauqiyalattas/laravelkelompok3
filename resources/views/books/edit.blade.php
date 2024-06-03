@extends('layouts.main')

@section('content')
<form action="{{ route('anggota.update' , $anggota->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group p-3">
        <label>Nama Lengkap</label>
        <input type="name" name='nama' class="form-control" placeholder="Masukan Nama Lengkap" value="{{ $anggota->nama }}">
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group p-3">
        <label>Nomor Identifikasi</label>
        <input value="{{ $anggota->nomor_identifikasi }}" type="name" name='nomor_identifikasi' class="form-control" placeholder="Masukan Nomor Identifikasi">
        @error('nomor_identifikasi')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group p-3">
        <label>Alamat</label>
        <input value="{{ $anggota->alamat }}" type="name" name='alamat' class="form-control" placeholder="Masukan Alamat">
        @error('alamat')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group p-3">
        <label>Nomor Telepon</label>
        <input value="{{ $anggota->nomor_telepon }}" type="name" name='nomor_telepon' class="form-control" placeholder="Masukan Nomor Telepon">
        @error('nomor_telepon')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group p-3">
        <label>Tanggal Bergabung</label>
        <input value="{{ $anggota->tanggal_bergabung }}" type="date" name='tanggal_bergabung' class="form-control">
        @error('tanggal_bergabung')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group p-3">
        <label>Status Keanggotaan</label>
        <select name="status_keanggotaan" class="form-control">
            <option value="Aktif" {{ old('status_keanggotaan', $anggota->status_keanggotaan) == 'Aktif' ? 'selected' : '' }}>Aktif</option>
            <option value="Tidak Aktif" {{ old('status_keanggotaan', $anggota->status_keanggotaan) == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
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
