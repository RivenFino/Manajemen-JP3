<?php

namespace App\Http\Controllers;

use App\Http\Requests\RiwayatRequest;
use App\Models\Guru;
use App\Models\MataPelajaran;
use App\Models\Riwayat;
use App\Models\RiwayatGenap;
use Illuminate\Http\Request;

class riwayatController extends Controller
{
    public function tampil()
    {
        $riwayat = Riwayat::get();
        return view('riwayat.ganjil.index', compact('riwayat'));
    }
    public function tampilGenap()
    {
        $riwayat = RiwayatGenap::get();
        return view('riwayat.genap.index', compact('riwayat'));
    }

    public function tambah()
    {
        $guru = Guru::get();
        $mapel = MataPelajaran::get();
        return view('riwayat.ganjil.create', compact('guru', 'mapel'));
    }
    public function tambahGenap()
    {
        $guru = Guru::get();
        $mapel = MataPelajaran::get();
        return view('riwayat.genap.create', compact('guru', 'mapel'));
    }

    public function simpan(RiwayatRequest $request)
    {
        $data = $request->validated();
        Riwayat::create($data);

        return redirect()->route('riwayat.tampil')->with('success', 'Data berhasil disimpan');
    }
    public function simpanGenap(Request $request)
    {
        $data = $request->validated();
        RiwayatGenap::create($data);

        return redirect()->route('riwayatgenap.tampil')->with('success', 'Data berhasil disimpan');
    }

    public function ubah(string $nip)
    {
        $guru = Guru::where('nip', $nip)->first();
        return view('guru.edit', compact('guru'));
    }

    public function simpan_ubah(Request $request, $id)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
        ]);

        $guru = Guru::Where('nip', $id)->first();

        $guru->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('guru.tampil')->with('success', 'Data berhasil diperbarui');
    }
    public function ubahGenap(string $nip)
    {
        $guru = Guru::where('nip', $nip)->first();
        return view('guru.edit', compact('guru'));
    }

    public function simpan_ubahGenap(Request $request, $id)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
        ]);

        $guru = Guru::Where('nip', $id)->first();

        $guru->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('guru.tampil')->with('success', 'Data berhasil diperbarui');
    }

    public function hapus($id)
    {
        $guru = Guru::where('nip', $id)->first();
        $guru->delete();
        return redirect()->route('guru.tampil')->with('success', 'Data siswa berhasil dihapus');

    }
    public function hapusGenap($id)
    {
        $guru = Guru::where('nip', $id)->first();
        $guru->delete();
        return redirect()->route('guru.tampil')->with('success', 'Data siswa berhasil dihapus');

    }
}
