<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.tambahbuku',[
            'data' => Buku::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.createtambahbuku');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request
     $request)
    {
        //validate form
        $this->validate($request, [
            'sampul'     => 'required|image',
            'judul'     => 'required',
            'kategori_id'   => 'required',
            'deskripsi'   => 'required',
            'penulis'   => 'required',
            'penerbit'   => 'required',
            'tahun'   => 'required',
            'jumlah'   => 'required',
        ]);

        //upload image
        $sampul = $request->file('sampul');
        $sampul->storeAs('public/posts', $sampul->hashName());

        //create post
        Buku::create([
            'sampul'     => $sampul->hashName(),
            'judul'     => $request->judul,
            'kategori_id'   => $request->kategori_id,
            'deskripsi'   => $request->deskripsi,
            'penulis'   => $request->penulis,
            'penerbit'   => $request->penerbit,
            'tahun'   => $request->tahun,
            'jumlah'   => $request->jumlah,
        ]);

        //redirect to index
        return redirect('/tambahbuku')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}