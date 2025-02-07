<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    // Method untuk menampilkan daftar user
    public function index()
    {
        $users = User::all(); // Ambil semua data user
        return view('admin.adminuser', compact('users')); // Pastikan file view ada di resources/views/admin/users/index.blade.php
    }

    // Method untuk menghapus user
    public function destroy($id)
    {
        $user = User::findOrFail($id); // Cari user berdasarkan ID
        $user->delete(); // Hapus user

        return redirect()->route('admin.adminuser')->with('success', 'berhasil dihapus.');
    }
}
