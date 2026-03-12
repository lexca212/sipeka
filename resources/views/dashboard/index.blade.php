@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <h1>Dashboard</h1>

    <div class="card">
        <div class="card-body">
            Selamat datang <i><u>{{auth()->user()->name}}</u></i> di Sistem Informasi Penanganan Perkara LBH PWM JATENG 🚀
            
    </div>
<div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-list"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Perkara Pidana</span>
                <span class="info-box-number">760</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        </div>

</div>
@endsection
