@extends('layouts.admin')

@section('title', 'Tambah Client')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Client</h3>
        </div>
        <form action="{{ route('client.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Jenis Client</label>
                    <select name="jenis_client" class="form-control" required>
                        <option value="Pribadi" {{ old('jenis_client') == 'Pribadi' ? 'selected' : '' }}>Pribadi</option>
                        <option value="Instansi" {{ old('jenis_client') == 'Instansi' ? 'selected' : '' }}>Instansi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>NIK/Identitas</label>
                    <input type="text" name="nik_client" class="form-control" value="{{ old('nik_client') }}" required>
                </div>
                <div class="form-group">
                    <label>Nama Client</label>
                    <input type="text" name="nama_client" class="form-control" value="{{ old('nama_client') }}" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir_client" class="form-control" value="{{ old('tgl_lahir_client') }}">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat_client" class="form-control" value="{{ old('alamat_client') }}" required>
                </div>
                <div class="form-group">
                    <label>No HP</label>
                    <input type="text" name="no_hp_client" class="form-control" value="{{ old('no_hp_client') }}" required>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('client.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
@endsection
