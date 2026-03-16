@extends('layouts.login')

@section('title', 'Login LBH PWM JATENG')

@section('content')

<style>
    body {
        background: #f4f6f9;
    }

    .login-wrapper {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login-card {
        width: 380px;
    }
</style>

<div class="login-wrapper">

    <div class="login-card">

        <div class="login-logo text-center mb-3">
            <a href="{{ url('/') }}">
                <b>Si</b>PEKA
            </a>
        </div>
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif


        <div class="card shadow">

            <div class="card-body login-card-body">

                <p class="login-box-msg">
                    Silakan login untuk masuk ke sistem
                </p>

                <form action="{{ route('login.post') }}" method="POST">
                    @csrf

                    {{-- Email --}}
                    <div class="input-group mb-3">
                        <input
                            type="email"
                            name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            placeholder="Email"
                            value="{{ old('email') }}"
                            required
                            autofocus>

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>

                        @error('email')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div class="input-group mb-3">
                        <input
                            type="password"
                            name="password"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="Password"
                            required>

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>

                        @error('password')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row">

                        <div class="col-6">
                            <div class="icheck-primary">
                                <input
                                    type="checkbox"
                                    name="remember"
                                    id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">
                                    Ingat Saya
                                </label>
                            </div>
                        </div>

                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">
                                Login
                            </button>
                        </div>



                    </div>

                </form>

                <hr>

                <div class="card-footer">
                    <center><strong>
                            <p> Lembaga Bantuan Hukum <br>Pimpinan Wilayah Muhammadiyah <br> Jawa Tengah

                            </p>
                    </center></strong>

                </div>

            </div>

        </div>

    </div>


</div>

@endsection