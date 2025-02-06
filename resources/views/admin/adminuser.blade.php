@extends('adminlte::page')

@section('title', 'Admin User')

@section('content_header')
    <h1>Daftar User</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bro ku</td>
                        <td>broku@example.com</td>
                        <td>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bro lu</td>
                        <td>brolu@example.com</td>
                        <td>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <style>
        .btn-danger {
            background-color: #dc3545;
            border: none;
        }
    </style>
@stop
