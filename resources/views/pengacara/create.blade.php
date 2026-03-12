@extends('layouts.admin')

@section('title', 'Tambah Data Pengacara')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Jenis Perkara</h3>
        </div>
        <form action="{{ route('jenisperkara.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Nama Pengacara</label>
                    <input type="text" name="nama_pengacara" class="form-control" placeholder="contoh : Perdata" required>
                </div>
                <div class="form-group">
                    <label>Alamat Pengacara</label>
                    <input type="text" name="alamat_pengacara" class="form-control" placeholder="Contoh : Kasus perdata" required>
                </div>
                 <div class="form-group">
                    <label>Nomor HP</label>
                    <input type="text" name="no_hp_pengacara" class="form-control" placeholder="Contoh : Kasus perdata" required>
                </div>
                 <div class="form-group">
                    <label>spesialisasi</label>
                    <input type="text" name="spesialisasi_pengacara" class="form-control" placeholder="Contoh : Kasus perdata" required>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('jenisperkara') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
@endsection
