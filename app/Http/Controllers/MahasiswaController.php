<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // TAMPILKAN SEMUA MAHASISWA
    public function index()
    {
        $mahasiswas = Mahasiswa::with('prodi')->get();
        return view('mahasiswas.index', compact('mahasiswas'));
    }

    // FORM TAMBAH MAHASISWA
    public function create()
    {
        $prodis = Prodi::all();
        return view('mahasiswas.create', compact('prodis'));
    }

    // SIMPAN DATA MAHASISWA BARU
    public function store(Request $request)
    {
        Mahasiswa::create($request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswas',
            'kelas' => 'required',
            'prodi_id' => 'required|exists:prodis,id',
            'angkatan' => 'required|integer',
        ]));
        return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa berhasil ditambah');
    }

    // FORM EDIT MAHASISWA
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $prodis = Prodi::all();
        return view('mahasiswas.edit', compact('mahasiswa', 'prodis'));
    }

    // UPDATE DATA MAHASISWA
    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswas,nim,'.$mahasiswa->id,
            'kelas' => 'required',
            'prodi_id' => 'required|exists:prodis,id',
            'angkatan' => 'required|integer',
        ]));
        return redirect()->route('mahasiswas.index')->with('success', 'Data berhasil diupdate');
    }

    // HAPUS DATA MAHASISWA
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswas.index')->with('success', 'Data berhasil dihapus');
    }
}
