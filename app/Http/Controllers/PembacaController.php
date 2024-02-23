<?php

namespace App\Http\Controllers;

use App\Http\Requests\PembacaRequest;
use App\Models\Pembaca;
use App\Models\User;
use Illuminate\Http\Request;

class PembacaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembaca = Pembaca::get();
        $user = User::where('role', 'user')->get();
        return view('data-management.pembaca-pages.pembaca-table', compact('pembaca', 'user'))->with('title', 'Pembaca Table');
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
    public function store(PembacaRequest $request)
    {
        $pembaca = Pembaca::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PembacaRequest $request, string $id)
    {
        $pembaca = Pembaca::where('id_pembaca', $id)->update([
            'id_user' => $request->id_user
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembaca = Pembaca::where('id_pembaca', $id)->delete();
        return back();
    }
}
