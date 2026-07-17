<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MateriHuruf;

class MateriHurufController extends Controller
{
    // FORM INPUT GURU
    public function index()
    {
        return view('guru.pages.materi-huruf');
    }

    // DATA MATERI HURUF
    public function data()
    {
        $materi = MateriHuruf::all();

        return view('guru.pages.data-materi-huruf', compact('materi'));
    }

    // HALAMAN BELAJAR HURUF (LANDING)
    public function belajarHuruf()
    {
        $materi = MateriHuruf::orderBy('huruf', 'asc')->get();

        return view('landing.pages.belajar-huruf', compact('materi'));
    }

    // SIMPAN DATA
    public function store(Request $request)
    {
        $request->validate([
            'huruf'  => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png',
            'audio'  => 'nullable|mimes:mp3,wav'
        ]);

        $gambar = null;
        $audio = null;

        if ($request->hasFile('gambar')) {

            $file = $request->file('gambar');

            $namaFile = time() . '_gambar.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads/materi'), $namaFile);

            $gambar = 'uploads/materi/' . $namaFile;
        }

        if ($request->hasFile('audio')) {

            $file = $request->file('audio');

            $namaFile = time() . '_audio.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads/materi'), $namaFile);

            $audio = 'uploads/materi/' . $namaFile;
        }

        MateriHuruf::create([
            'huruf'  => strtoupper($request->huruf),
            'gambar' => $gambar,
            'audio'  => $audio
        ]);

        return redirect()->back()->with('success', 'Materi berhasil ditambahkan');
    }

    // FORM EDIT
    public function edit($id)
    {
        $materi = MateriHuruf::findOrFail($id);

        return view('guru.pages.edit-materi-huruf', compact('materi'));
    }

    // UPDATE DATA
    public function update(Request $request, $id)
    {
        $materi = MateriHuruf::findOrFail($id);

        $request->validate([
            'huruf' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png',
            'audio' => 'nullable|mimes:mp3,wav'
        ]);

        $gambar = $materi->gambar;
        $audio = $materi->audio;

        // Update gambar jika upload baru
        if ($request->hasFile('gambar')) {

            $file = $request->file('gambar');

            $namaFile = time() . '_gambar.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads/materi'), $namaFile);

            $gambar = 'uploads/materi/' . $namaFile;
        }

        // Update audio jika upload baru
        if ($request->hasFile('audio')) {

            $file = $request->file('audio');

            $namaFile = time() . '_audio.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads/materi'), $namaFile);

            $audio = 'uploads/materi/' . $namaFile;
        }

        $materi->update([
            'huruf' => strtoupper($request->huruf),
            'gambar' => $gambar,
            'audio' => $audio
        ]);

        return redirect()->route('materi.huruf.data')
            ->with('success', 'Materi berhasil diupdate');
    }

    // HAPUS DATA
    public function delete($id)
    {
        $materi = MateriHuruf::findOrFail($id);

        $materi->delete();

        return redirect()->back()->with('success', 'Materi berhasil dihapus');
    }
}