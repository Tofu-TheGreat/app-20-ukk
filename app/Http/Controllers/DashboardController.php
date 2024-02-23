<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $buku = Buku::get()->count();
        $kategori = Kategori::get()->count();
        $peminjaman = Peminjaman::get()->count();
        $user = User::get()->count();
        $buku_all = Buku::get()->sortBy('created_at', SORT_REGULAR, true)->take(3);
        return view('data-management.dashboard', compact('buku', 'kategori', 'peminjaman', 'buku_all', 'user'))->with('title', 'Dashboard');
    }
}
