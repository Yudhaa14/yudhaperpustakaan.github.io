<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Http\Requests\StorePeminjamanRequest;
use App\Http\Requests\UpdatePeminjamanRequest;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        // $datas = Peminjaman::all();
        // dd($datas);
        return view('layouts.datapeminjam', [
            'data' => Peminjaman::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.createdatapeminjam');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        // dd($request);
        //validate form
        $validatedData =  $request->validate([
            'user_id'     => 'required',
            'buku_id'     => 'required',
            'tanggal_pinjaman'   => 'required',
        ]);

        $validatedData['status'] = "diproses";
        $validatedData['tanggal_pengembalian'] = null;

        //create post
        Peminjaman::create($validatedData);

        //redirect to index
        return redirect()->route('datapeminjam.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Peminjam $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $request, $id)
    {
        //get post by ID
        $datapeminjam = Peminjaman::findOrFail($id);

        //render view with post
        return view('layouts.editdatapeminjam', compact('datapeminjam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datapeminjam = Peminjaman::findOrFail($id);

        $datapeminjam->user_id = $request->user_id;
        $datapeminjam->buku_id = $request->buku_id;
        $datapeminjam->tanggal_pinjaman = $request->tanggal_pinjaman;
        $datapeminjam->tanggal_pengembalian = $request->tanggal_pengembalian;
        $datapeminjam->status = $request->status;

        $datapeminjam->save();

        return redirect('/datapeminjam');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $datapeminjam = Peminjaman::findOrFail($id);

        $datapeminjam->delete();

        return back();
    }
}

