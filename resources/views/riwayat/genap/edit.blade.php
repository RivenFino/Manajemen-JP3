@extends('layout.main')
@section('isi')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper h-[calc(100vh-4rem)] overflow-y-auto bg-gray-200">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <h3 class="m-0 content-title text-xl text-red-950 font-semibold">Edit Data Mapel</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content ">
        <div class="w-full min-h-full flex justify-center items-center px-8 flex-col">

            <form action="{{route('mapel.ubah.simpan', $mapel->mapel)}}" method="POST"
                class="gap-6 px-16 rounded-2xl py-12 shadow-sm bg-gray-100 border min-w-full flex flex-col justify-start items-center">
                @csrf
                @method('PUT')
                <div class="flex flex-col w-full justify-center items-start gap-2 py-2">
                    <label for="" class="text-2xl font-semibold">Mapel</label>
                    <input type="text" class="w-full h-12 px-4 text-xl rounded-lg"
                        value="{{old('mapel', $mapel->nama_mapel)}}" name="mapel" required>
                    @error('mapel')
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