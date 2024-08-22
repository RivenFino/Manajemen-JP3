<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class guruController extends Controller
{
    public function tampil()
    {
        $guru = Guru::get();
        return view('guru.index',compact('guru'));
    }

    public function tambah()
    {
        return view('guru.create');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nip' => 'required|string|max:10|unique:guru,nip',
            'nama' => 'required|string|max:255',
        ]);

        Guru::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
        ]);

        return redirect()->route('guru.tampil')->with('success', 'Data berhasil disimpan');
    }

    public function ubah(string $nip)
    {
        $guru = Guru::where('nip', $nip)->first();
        return view('guru.edit', compact('guru'));
    }

    public function simpan_ubah(Request $request, $nip)
    {
        $request->validate([
            'nama' => ['required','string','max:255'],
        ]);

        $guru = Guru::Where('nip', $nip)->first();
    
        $guru->update([
            'nama' => $request->nama,
        ]);
    
        return redirect()->route('guru.tampil')->with('success', 'Data berhasil diperbarui');
    }

    public function hapus($nip)
    {
        $guru = Guru::where('nip', $nip)->first();
        $guru->delete();
        return redirect()->route('guru.tampil')->with('success', 'Data siswa berhasil dihapus');

    }
}
