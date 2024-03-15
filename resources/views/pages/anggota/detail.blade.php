@extends('layouts.main')

@section('content')
    <div>

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" value="{{ $anggota->nama }}" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Nomor Identifikasi</label>
            <input type="text" class="form-control" value="{{ $anggota->nomor_identifikasi }}" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" value="{{ $anggota->alamat }}" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" value="{{ $anggota->nomor_telepon }}" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Bergabung</label>
            <input type="text" class="form-control" value="{{ $anggota->tanggal_bergabung }}" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Status Keanggotaan</label>
            <input type="text" class="form-control" value="{{ $anggota->status_keanggotaan }}" readonly>
        </div>
        <a href="{{ route('anggota.index') }}" class="btn btn-primary">Back to Anggota</a>

    </div>
@endsection
