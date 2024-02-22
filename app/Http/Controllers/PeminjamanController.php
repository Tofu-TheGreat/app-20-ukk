<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\DetailPeminjaman;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjaman_nostatus = Peminjaman::where('status_peminjaman', null)->get();
        $peminjaman_dipinjam = Peminjaman::where('status_peminjaman', 'dipinjam')->get();
        $peminjaman_dikembalikan = Peminjaman::where('status_peminjaman', 'dikembalikan')->get();
        $user = User::get();
        return view('data-management.peminjaman-pages.peminjaman-tables', compact(['peminjaman_nostatus', 'peminjaman_dipinjam', 'peminjaman_dikembalikan', 'user']))->with('title', 'Peminjaman Tables');
    }

    public function peminjaman_steptwo(Request $request)
    {
        $data = $request->all();
        $buku = Buku::get();
        return view('data-management.peminjaman-pages.peminjaman-steptwo', compact(['data', 'buku']))->with('title', 'Peminjaman Step Two');
    }

    public function ubah_status(Request $request, $id)
    {
        $peminjaman = Peminjaman::where('id_peminjaman', $id)->first();
        $peminjaman->update([
            'status_peminjaman' => $request->status_peminjaman
        ]);
        return redirect()->intended('peminjaman');
    }
    public function hapus_status(Request $request, $id)
    {
        $peminjaman = Peminjaman::where('id_peminjaman', $id)->first();
        $peminjaman->update([
            'status_peminjaman' => null
        ]);
        return redirect()->intended('peminjaman');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $peminjaman = Peminjaman::create([
            'id_user' => $request->id_user,
            'tanggal_peminjaman' => $request->tanggal_peminjaman,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
        ]);

        $buku_array = is_array($request->id_buku) ? $request->id_buku : [$request->id_buku];

        if ($buku_array) {
            foreach ($buku_array as $item) {
                $detail_peminjaman = DetailPeminjaman::create([
                    'id_peminjaman' => $peminjaman->id_peminjaman,
                    'id_buku' => $item,
                    'jumlah_pinjam' => $request->jumlah_pinjam
                ]);
            }
        } else {
            $detail_peminjaman = DetailPeminjaman::create([
                'id_peminjaman' => $peminjaman->id_peminjaman,
                'id_buku' => $request->id_buku,
                'jumlah_pinjam' => $request->jumlah_pinjam
            ]);
        }


        return redirect()->intended('buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $peminjaman = Peminjaman::where('id_peminjaman', $id)->first();
        $peminjaman->update([
            'id_user' => $request->id_user,
            'tanggal_peminjaman' => $request->tanggal_peminjaman,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
        ]);
        return redirect()->intended('peminjaman');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjaman, $id)
    {
        $peminjaman = Peminjaman::where('id_peminjaman', $id)->first();
        $peminjaman->delete();
        return back();
    }
}
