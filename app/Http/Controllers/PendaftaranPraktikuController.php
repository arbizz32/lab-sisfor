<?php

namespace App\Http\Controllers;

use App\Models\PendaftaranPraktikum;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class PendaftaranPraktikumController extends Controller
{
    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        return view('pendaftaran.create', compact('mahasiswa'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_mahasiswa' => 'required|exists:mahasiswa,id',
            'nama' => 'required|string|max:255',
            'nim' => 'required|integer',
            'semester' => 'required|integer',
            'upload_pembayaran' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ]);

        // Simpan file pembayaran
        $path = $request->file('upload_pembayaran')->store('pembayaran', 'public');

        PendaftaranPraktikum::create([
            'id_mahasiswa' => $validated['id_mahasiswa'],
            'nama' => $validated['nama'],
            'nim' => $validated['nim'],
            'semester' => $validated['semester'],
            'upload_pembayaran' => $path,
        ]);

        return redirect()->route('pendaftaran.create')->with('success', 'Pendaftaran berhasil!');
    }
}