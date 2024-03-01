<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // $profile = Profile::first(); // Ganti dengan logika yang sesuai untuk mendapatkan profil pengguna
    return view('layouts.profile');
}

public function edit()
{
    $profile = Profile::first(); // Ganti dengan logika yang sesuai untuk mendapatkan profil pengguna
    return view('profil.edit', ['profile' => $profile]);
}

public function update(Request $request)
{
    // Validasi input sesuai kebutuhan
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        // tambahkan validasi untuk kolom lain jika diperlukan
    ]);

    $profile = Profile::first(); // Ganti dengan logika yang sesuai untuk mendapatkan profil pengguna
    $profile->update($request->all());

    return redirect()->route('profil.edit')->with('success', 'Profil berhasil diperbarui');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
