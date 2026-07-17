<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murid;

class MuridController extends Controller
{
    // FORM INPUT MURID
    public function form()
    {
        return view('guru.pages.form-murid');
    }

    // DATA MURID (TABEL)
    public function data()
    {
        $murid = Murid::all();

        return view('guru.pages.data-murid', compact('murid'));
    }

    // SIMPAN DATA MURID
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jenis_kelamin' => 'required'
        ]);

        Murid::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect()->route('murid.data')
            ->with('success', 'Data murid berhasil ditambahkan');
    }

    // FORM EDIT MURID
    public function edit($id)
    {
        $murid = Murid::findOrFail($id);

        return view('guru.pages.edit-murid', compact('murid'));
    }

    // UPDATE DATA MURID
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jenis_kelamin' => 'required'
        ]);

        $murid = Murid::findOrFail($id);

        $murid->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect()->route('murid.data')
            ->with('success', 'Data berhasil diupdate');
    }

    // HAPUS DATA MURID
    public function delete($id)
    {
        $murid = Murid::findOrFail($id);
        $murid->delete();

        return redirect()->back()
            ->with('success', 'Data murid berhasil dihapus');
    }
}