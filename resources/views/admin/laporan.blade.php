@extends('adminlte::page')

@section('title', 'Laporan User')

@section('content_header')
    <h1>Laporan User</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Laporan</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bro Boni</td>
                        <td>Laporan tentang sistem.</td>
                        <td>06 Feb 2025 12:30</td>
                        <td>
                            <span class="badge badge-warning">Pending</span>
                        </td>
                        <td>
                            <form action="/reports/1/mark-as-done" method="POST" style="display:inline;">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-sm btn-success">
                                    <i class="fas fa-check"></i> Tandai Selesai
                                </button>
                            </form>
                            <form action="/reports/1/delete" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus laporan ini?')">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bro Edo</td>
                        <td>Laporan bug pada aplikasi.</td>
                        <td>06 Feb 2025 14:00</td>
                        <td>
                            <span class="badge badge-warning">Pending</span>
                        </td>
                        <td>
                            <form action="/reports/2/mark-as-done" method="POST" style="display:inline;">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-sm btn-success" >
                                    <i class="fas fa-check"></i> Tandai Selesai
                                </button>
                            </form>
                            <form action="/reports/2/delete" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus laporan ini?')">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    <!-- Add more reports here -->
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop
