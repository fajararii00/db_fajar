<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $prodis = Prodi::all();
        return view('prodis.index', compact('prodis'));
    }

    public function create()
    {
        return view('prodis.create');
    }

    public function store(Request $request)
    {
        Prodi::create($request->validate([
            'nama' => 'required',
            'fakultas' => 'required',
        ]));
        return redirect()->route('prodis.index')->with('success', 'Prodi berhasil ditambah');
    }

    public function edit($id)
    {
        $prodi = Prodi::findOrFail($id);
        return view('prodis.edit', compact('prodi'));
    }

    public function update(Request $request, $id)
    {
        $prodi = Prodi::findOrFail($id);
        $prodi->update($request->validate([
            'nama' => 'required',
            'fakultas' => 'required',
        ]));
        return redirect()->route('prodis.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $prodi = Prodi::findOrFail($id);
        $prodi->delete();
        return redirect()->route('prodis.index')->with('success', 'Data berhasil dihapus');
    }
}
