@extends('adminlte::page')

@section('title', 'Artikel')

@section('content_header')
    <h1>Tambah Artikel</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data"> 
                @csrf
                <div class="form-group">
                    <label for="title">Judul Artikel</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="content">Isi Artikel</label>
                    <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Upload Gambar</label>
                    <input type="file" name="image" id="image" class="form-control-file" accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            <h3>Daftar Artikel</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Contoh Judul Artikel</td>
                        <td>Ini adalah contoh isi artikel...</td>
                        <td><img src="https://via.placeholder.com/100" alt="Gambar Artikel"></td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Artikel Kedua</td>
                        <td>Isi artikel kedua...</td>
                        <td><img src="https://via.placeholder.com/100" alt="Gambar Artikel"></td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop
