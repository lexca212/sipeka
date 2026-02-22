@extends('layouts.admin')

@section('title', 'Edit Perkara')

@section('content')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Edit Data Perkara</h3>
        </div>
        <form action="{{ route('perkara.update', $perkara->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('perkara.form')
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Update</button>
                <a href="{{ route('perkara.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
@endsection
