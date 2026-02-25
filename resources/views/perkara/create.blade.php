@extends('layouts.admin')

@section('title', 'Tambah Perkara')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Perkara</h3>
        </div>
        <form action="{{ route('perkara.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('perkara.form')
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('perkara.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
@endsection
