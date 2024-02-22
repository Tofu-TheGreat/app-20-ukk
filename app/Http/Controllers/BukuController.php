<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\KategoriBuku;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Intervention\Image\Facades\Image;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::get();
        $kategori = Kategori::get();
        $kategoribuku = KategoriBuku::get();
        return view('data-management.book-pages.book', compact('buku', 'kategori', 'kategoribuku'))->with('title', 'Buku');
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
        $req = $request->all();
        $image = $req['sampul_buku'];
        $imageName = time() . '.' . $image->extension();
        $path = public_path('book_cover');
        $imageFile = Image::make($image->getRealPath());
        $imageFile->resize(1000, 1600, function ($constraint) {
            $constraint->upsize();
        });
        $req['sampul_buku']->move($path . '/', $imageName);

        $req['sampul_buku'] = $imageName;
        $req['tahun_terbit'] = Carbon::createFromFormat('Y-m-d', $req['tahun_terbit'])->year;
        $req = Arr::except($req, ['id_kategori']);
        $book = Buku::create($req);
        $kategori_array = is_array($request->id_kategori) ? $request->id_kategori : [$request->id_kategori];
        if ($kategori_array) {
            foreach ($kategori_array as $items) {
                $kategoribuku = KategoriBuku::create([
                    'id_buku' => $book->id_buku,
                    'id_kategori' => $items
                ]);
            }
        } else {
            $kategoribuku = KategoriBuku::create([
                'id_buku' => $book->id_buku,
                'id_kategori' => $req['id_kategori']
            ]);
        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $buku = Buku::where('id_buku', $id)->first();
        $kategori = Kategori::get();
        $kategoribuku = KategoriBuku::where('id_buku', $id)->get()->toArray();
        return view('data-management.book-pages.book-detail', compact(['buku', 'kategoribuku', 'kategori']))->with('title', 'Edit Buku');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $buku = Buku::where('id_buku', $id)->first();
        return view('data-management.book-pages.book-edit', compact('buku'))->with('title', 'Edit Buku');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('sampul_buku')) {
            $req = $request->all();
            $imagedeleted = Buku::where('id_buku', $id)->first();

            if ($imagedeleted->sampul_buku != null) {
                $path = public_path('book_cover/' . $imagedeleted->sampul_buku);
                if (file_exists($path)) {
                    unlink($path);
                }
            }

            $image = $req['sampul_buku'];
            $imageName = time() . '.' . $image->extension();
            $path = public_path('book_cover');
            $imageFile = Image::make($image->getRealPath());
            $imageFile->resize(1000, 1600, function ($constraint) {
                $constraint->upsize();
            });
            $req['sampul_buku']->move($path . '/', $imageName);

            $req['sampul_buku'] = $imageName;
            if ($request->tahun_terbit != null) {
                $req['tahun_terbit'] = Carbon::createFromFormat('Y-m-d', $req['tahun_terbit'])->year;
            } else {
                $req['tahun_terbit'] = Buku::where('id_buku', $id)->first()->tahun_terbit;
            }
            $req = Arr::except($req, ['_token', '_method']);
            $buku = Buku::where('id_buku', $id)->update($req);
        } else {
            $req = $request->all();
            if ($request->tahun_terbit != null) {
                $req['tahun_terbit'] = Carbon::createFromFormat('Y-m-d', $req['tahun_terbit'])->year;
            } else {
                $req['tahun_terbit'] = Buku::where('id_buku', $id)->first()->tahun_terbit;
            }
            $req = Arr::except($req, ['_token', '_method']);
            $buku = Buku::where('id_buku', $id)->update($req);
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $imagedeleted = Buku::where('id_buku', $id)->first();

        if ($imagedeleted->sampul_buku != null) {
            $path = public_path('book_cover/' . $imagedeleted->sampul_buku);
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $imagedeleted->delete();
        $kategoribuku = KategoriBuku::where('id_buku', $id)->delete();
        return back();
    }
}
