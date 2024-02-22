<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::get();
        return view('data-management.user-pages.user-table', compact('user'))->with('title', 'User Table');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data-management.user-pages.user-add')->with('title', 'Create User');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $user = User::create([
            'nik' => $request->nik,
            'username' => $request->username,
            'email' => $request->email,
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nomor_telepon' => $request->nomor_telepon,
            'alamat' => $request->alamat,
            'password'=> Hash::make($request->password),
            'role' => $request->role,
        ]);
        return redirect()->intended('user');
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
        $user = User::where('id', $id)->first();
        return view('data-management.user-pages.user-edit', compact('user'))->with('title', 'Edit User');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::where('id', $id)->first();
        if($request->has('password')){
            $password = Hash::make($request->password);
        }else{
            $password = $user->password;
        }
        $user->update([
            'nik' => $request->nik,
            'username' => $request->username,
            'email' => $request->email,
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nomor_telepon' => $request->nomor_telepon,
            'alamat' => $request->alamat,
            'role' => $request->role,
            'password' => $password
        ]);
        return redirect()->intended('user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
