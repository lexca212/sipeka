@extends('layouts.admin')

@section('title', 'Tambah Jenis Perkara')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Laporan Perkara</h3>
        </div>
        <form action="{{ route('laporanperkara.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Tanggal Laporan</label>
                    <input type="date" name="tanggal_laporan" class="form-control" value="{{ date('Y-m-d') }}"  required>
                </div>
                <div class="form-group">
                    <label>Data Perkara</label>
                    <!-- <input type="text" name="nama_jenis_perkara" class="form-control" placeholder="contoh : Perdata" required> -->
                     <select class="form-control" name="id_perkara" id="id_perkara">
                        @foreach ($perkara as $p)
                        <option value="{{$p->id}}">{{$p->no_perkara_internal}}</option>
                        @endforeach
                     </select>
                </div>
                <div class="form-group">
                    <label>Uraian Laporan</label>
                    <!-- <input type="text" name="uraian_laporan" class="form-control" placeholder="Contoh : Kasus perdata" required> -->
                     <textarea class="form-control" name="uraian_laporan" id=""></textarea>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" placeholder="Contoh : Kasus perdata" required>
                </div>
                <div class="form-group">
                    <label>File</label>
                    <input type="file" name="file" class="form-control-file" >
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('laporanperkara') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
@endsection
