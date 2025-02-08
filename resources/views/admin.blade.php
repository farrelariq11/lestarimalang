@extends('adminlte::page')

@section('title', 'Beranda')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <!-- Card untuk Artikel -->
        <div class="col-md-3">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $articleCount ?? 0 }}</h3>
                    <p>Artikel</p>
                </div>
                <div class="icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <a href="{{ url('/admin/adminartikel') }}" class="small-box-footer">
                    Kelola Artikel <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <!-- Card untuk history -->
        <div class="col-md-3">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $historyCount ?? 0 }}</h3>
                    <p>History</p>
                </div>
                <div class="icon">
                    <i class="fas fa-history"></i>
                </div>
                <a href="{{ url('/admin/history') }}" class="small-box-footer">
                    Kelola History <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <!-- Card untuk Laporan User -->
        <div class="col-md-3">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $reportCount ?? 0 }}</h3>
                    <p>Laporan User</p>
                </div>
                <div class="icon">
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <a href="{{ url('/admin/laporan') }}" class="small-box-footer">
                    Kelola Laporan <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <!-- Card untuk User -->
        <div class="col-md-3">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $userCount }}</h3>
                    <p>User Terdaftar</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="{{ url('/admin/adminuser') }}" class="small-box-footer">
                    Kelola User <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@stop

@section('js')
    <script> console.log("Dashboard Admin Loaded!"); </script>
@stop
