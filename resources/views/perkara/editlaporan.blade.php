@extends('layouts.admin')

@section('title', 'Tambah Jenis Perkara')

@section('content')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Edit Laporan</h3>
        </div>
        <form action="{{ route('laporanperkara.update', $laporanperkara->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label>Tanggal Laporan</label>
                    <input type="date" name="tanggal_laporan" class="form-control" value="{{ $laporanperkara->tanggal_laporan}}" readonly required>
                </div>
                <div class="form-group">
                    <label>Data Perkara</label>
                    <input type="hidden" name="id_perkara" value="{{ $laporanperkara->id_perkara}}">
                    <input type="text"  class="form-control" value="{{ $laporanperkara->perkara->no_perkara_internal}}" readonly>

                </div>
                <div class="form-group">
                    <label>Uraian Laporan</label>
                    <!-- <input type="text" name="uraian_laporan" class="form-control" placeholder="Contoh : Kasus perdata" required> -->
                     <textarea class="form-control" name="uraian_laporan" id="">{{ $laporanperkara->uraian_laporan}}</textarea>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" placeholder="Contoh : Kasus perdata" required>
                </div>
                <div class="form-group">
                    <label>File</label>
                    <input type="file" name="file" class="form-control-file" >
                    @if (!empty($laporanperkara->file) && $laporanperkara->file !== '-')
            <small class="text-muted d-block mt-2">File saat ini: {{ $laporanperkara->file }}</small>
        @endif
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('laporanperkara') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
@endsection
