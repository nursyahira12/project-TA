<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MateriAngka;

class MateriAngkaController extends Controller
{
    public function index()
    {
        return view('guru.pages.materi-angka');
    }

    public function data()
    {
        $materi = MateriAngka::all();

        return view('guru.pages.data-materi-angka', compact('materi'));
    }

    public function store(Request $request)
    {
        $gambar = null;
        $audio = null;

        // Upload Gambar
        if ($request->hasFile('gambar')) {

            $file = $request->file('gambar');

            $namaFile = time() . '_gambar.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads/materi'), $namaFile);

            $gambar = 'uploads/materi/' . $namaFile;
        }

        // Upload Audio
        if ($request->hasFile('audio')) {

            $fileAudio = $request->file('audio');

            $namaAudio = time() . '_audio.' . $fileAudio->getClientOriginalExtension();

            $fileAudio->move(public_path('uploads/materi'), $namaAudio);

            $audio = 'uploads/materi/' . $namaAudio;
        }

        MateriAngka::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,
            'audio' => $audio
        ]);

        return redirect()->back()->with('success', 'Materi berhasil ditambahkan');
    }

    public function delete($id)
    {
        $materi = MateriAngka::findOrFail($id);

        $materi->delete();

        return redirect()->back()->with('success', 'Materi berhasil dihapus');
    }

    public function edit($id)
    {
        $materi = MateriAngka::findOrFail($id);

        return view('guru.pages.edit-materi-angka', compact('materi'));
    }

    public function update(Request $request, $id)
    {
        $materi = MateriAngka::findOrFail($id);

        $gambar = $materi->gambar;
        $audio = $materi->audio;

        // Update gambar
        if ($request->hasFile('gambar')) {

            $file = $request->file('gambar');

            $namaFile = time() . '_gambar.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads/materi'), $namaFile);

            $gambar = 'uploads/materi/' . $namaFile;
        }

        // Update audio
        if ($request->hasFile('audio')) {

            $fileAudio = $request->file('audio');

            $namaAudio = time() . '_audio.' . $fileAudio->getClientOriginalExtension();

            $fileAudio->move(public_path('uploads/materi'), $namaAudio);

            $audio = 'uploads/materi/' . $namaAudio;
        }

        $materi->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,
            'audio' => $audio
        ]);

        return redirect()->route('materi.angka.data')
            ->with('success', 'Materi berhasil diupdate');
    }
}