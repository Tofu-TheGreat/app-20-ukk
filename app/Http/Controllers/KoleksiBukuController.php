<?php

namespace App\Http\Controllers;

use App\Models\KoleksiBuku;
use Illuminate\Http\Request;

class KoleksiBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $koleksibuku = KoleksiBuku::where('id_user', auth()->user()->id)->get()->sortBy('created_at', SORT_REGULAR, true);
        return view('data-management.personal-collections-pages.personal-collections', compact('koleksibuku'))->with('title', 'Koleksi Buku Table');
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
        $pc = KoleksiBuku::create($request->all());
        return redirect()->intended('/koleksi');
    }

    /**
     * Display the specified resource.
     */
    public function show(KoleksiBuku $koleksiBuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KoleksiBuku $koleksiBuku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KoleksiBuku $koleksiBuku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pc = KoleksiBuku::where('id_koleksi_buku', $id)->first();
        $pc->delete();
        return back();
    }
}
