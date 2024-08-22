<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class mapelController extends Controller
{
    public function tampil()
    {
        $mapel= MataPelajaran::get();
        return view('mapel.index',compact('mapel'));
    }

    public function tambah()
    {
        return view('mapel.create');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'mapel' => 'required|string|max:255',
        ]);

        MataPelajaran::create([
            'nama_mapel' => $request->mapel,
        ]);

        return redirect()->route('mapel.tampil')->with('success', 'Data berhasil disimpan');
    }

    public function ubah(string $mapel)
    {
        $mapel = MataPelajaran::where('mapel', $mapel)->first();
        return view('mapel.edit', compact('mapel'));
    }

    public function simpan_ubah(Request $request, $mapel)
    {
        $request->validate([
            'mapel' => ['required','string','max:255'],
        ]);

        $mapel = MataPelajaran::Where('nama_mapel', $mapel)->first();
    
        $mapel->update([
            'nama_mapel' => $request->mapel,
        ]);
    
        return redirect()->route('mapel.tampil')->with('success', 'Data berhasil diperbarui');
    }

    public function hapus($mapel)
    {
        $mapel = MataPelajaran::where('nama_mapel', $mapel)->first();
        $mapel->delete();
        return redirect()->route('mapel.tampil')->with('success', 'Data siswa berhasil dihapus');

    }
}
