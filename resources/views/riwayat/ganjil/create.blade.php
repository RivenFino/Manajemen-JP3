@extends('layout.main')
@section('isi')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper h-[calc(100vh-4rem)] overflow-y-auto bg-gray-200">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <h3 class="m-0 content-title text-xl text-red-950 font-semibold">Tambah Data Mapel</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content ">

        <div class="w-full min-h-full flex justify-center items-center px-8 flex-col">

            <form action="{{route('riwayat.tambah.simpan')}}" method="POST"
                class="gap-6 px-16 rounded-2xl py-12 shadow-sm bg-gray-100 border min-w-full flex flex-col justify-start items-center">
                @csrf
                <div class="flex flex-col w-full justify-center items-start gap-2 py-2">
                    <label for="" class="text-2xl font-semibold">Guru</label>
                    <select name="id_guru" id="" class="w-full h-12 px-4 text-xl rounded-lg">
                        <option class="uppercase" disabled selected hidden value="">Pilih Guru</option>
                        @foreach ($guru as $d)
                            <option value="{{$d->id}}">{{$d->nama}}</option>
                        @endforeach
                    </select>
                    @error('id_guru')
                        <div class="text-red-600 bg-red-100 m-2 text-center rounded-md">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="flex flex-col w-full justify-center items-start gap-2 py-2">
                    <label for="" class="text-2xl font-semibold">Mapel</label>
                    <select name="id_mapel" id="" class="w-full h-12 px-4 text-xl rounded-lg">
                    <option class="uppercase" disabled selected hidden value="">Pilih Mapel</option>
                        @foreach ($mapel as $d)
                            <option value="{{$d->id}}">{{$d->nama_mapel}}</option>
                        @endforeach
                    </select>
                    @error('id_mapel')
                        <div class="text-red-600 bg-red-100 m-2 text-center rounded-md">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="flex flex-col w-full justify-center items-start gap-2 py-2">
                    <label for="" class="text-2xl font-semibold">Type</label>
                    <input type="text" class="w-full h-12 px-4 text-xl rounded-lg" name="type" required>
                    @error('type')
                        <div class="text-red-600 bg-red-100 m-2 text-center rounded-md">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="flex flex-col w-full justify-center items-start gap-2 py-2">
                    <label for="" class="text-2xl font-semibold">Kelas</label>
                    <select name="kelas" id="" class="w-full h-12 px-4 text-xl rounded-lg">
                        <option class="uppercase" disabled selected hidden value="">Pilih Kelas</option>
                        <option class="uppercase" value="x">x</option>
                        <option class="uppercase" value="xi">xi</option>
                        <option class="uppercase" value="xii">xii</option>
                    </select>
                    @error('kelas')
                        <div class="text-red-600 bg-red-100 m-2 text-center rounded-md">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="flex flex-col w-full justify-center items-start gap-2 py-2">
                    <label for="" class="text-2xl font-semibold">Rombel</label>
                    <input type="text" class="w-full h-12 px-4 text-xl rounded-lg" name="rombel" required>
                    @error('rombel')
                        <div class="text-red-600 bg-red-100 m-2 text-center rounded-md">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="flex flex-col w-full justify-center items-start gap-2 py-2">
                    <label for="" class="text-2xl font-semibold">Alokasi Jam Pelajaran</label>
                    <input type="text" class="w-full h-12 px-4 text-xl rounded-lg" name="alokasi_jp" required>
                    @error('alokasi_jp')
                        <div class="text-red-600 bg-red-100 m-2 text-center rounded-md">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="flex flex-col w-full justify-center items-start gap-2 py-2">
                    <label for="" class="text-2xl font-semibold">Total Jam Pelajaran</label>
                    <input type="text" class="w-full h-12 px-4 text-xl rounded-lg" name="total_jp" required>
                    @error('total_jp')
                        <div class="text-red-600 bg-red-100 m-2 text-center rounded-md">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="w-full flex justify-end items-center">
                    <button type="submit"
                        class="bg-blue-600 w-72 hover:bg-blue-500 text-white text-3xl py-2 px-6 rounded-md">Simpan</button>
                </div>

            </form>
        </div>

    </section>
    <!-- /.content -->
</div>
@endsection