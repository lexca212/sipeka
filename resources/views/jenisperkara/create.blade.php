@extends('layouts.admin')

@section('title', 'Tambah Jenis Perkara')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Jenis Perkara</h3>
        </div>
        <form action="{{ route('jenisperkara.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Jenis Perkara</label>
                    <input type="text" name="nama_jenis_perkara" class="form-control" placeholder="contoh : Perdata" required>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" placeholder="Contoh : Kasus perdata" required>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('jenisperkara') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
@endsection
