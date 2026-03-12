@extends('layouts.admin')

@section('title', 'Tambah Data User')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah USer</h3>
    </div>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">

                <label>Nama Pengacara</label>
                <!-- <input type="text" name="nama_pengacara" class="form-control" placeholder="contoh : Perdata" required> -->
                <select class="form-control" name="name" id="name">
                    @foreach($pengacara as $p)
                    <option value="{{$p->nama_pengacara}}">{{$p->nama_pengacara}}</option>
                    @endforeach
                </select>

            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" id="email"
                    class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') }}">

                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Role</label>
                <select class="form-control" name="role" id="">
                    <option value="admin">admin</option>
                    <option value="user">user</option>
                    <option value="bendahara">bendahara</option>
                </select>
                <!-- <input type="text" name="spesialisasi_pengacara" class="form-control" placeholder="Contoh : Kasus perdata" required> -->
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('jenisperkara') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>
@endsection