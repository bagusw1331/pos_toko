<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Mengambil semua user yang role-nya kasir
        $kasir = User::where('role', 'kasir')->get();

        return "Halaman Kelola Akun Kasir (Khusus Admin)";
    }
}
