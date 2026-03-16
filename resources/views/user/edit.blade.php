@extends('layouts.admin')

@section('title', 'Data user')

@section('content')

<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">Edit Password</h3>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('user.update')}}" method="POST">

        @csrf
        <div class="card-body">
            <div class="form-group">

                <label>Nama Pengacara</label>
                <input type="text" class="form-control" value="{{ $user->name }}" readonly>


            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="text" class="form-control" value="{{ $user->email }}" readonly>

            </div>
            <div class="form-group">
                <label>Password Lama</label>
                <input type="password" name="password_lama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password_baru"> Password Baru</label>
                <input type="password" name="password_baru" class="form-control" id="">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>
@endsection