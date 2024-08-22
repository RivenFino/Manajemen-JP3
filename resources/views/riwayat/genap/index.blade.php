@extends('layout.main')
@section('isi')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper h-[calc(100vh-4rem)] overflow-y-auto bg-gray-200">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <h3 class="m-0 content-title text-xl text-red-950 font-semibold">Data Riwayat Genap</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->
    <section class="content ">
        <div class="flex w-full h-16 justify-between items-center px-4">
            <div class="flex justify-center items-center gap-2">
                <a class="bg-green-500 rounded-xl text-white font-xl px-6 py-2 hover:bg-green-400" href="{{route('riwayat.tampil')}}">Riwayat Ganjil</a>
                <a class="bg-green-500 rounded-xl text-white font-xl px-6 py-2 hover:bg-green-400" href="{{route('riwayatgenap.tampil')}}">Riwayat Genap</a>
            </div>
            <a href="{{route('riwayatgenap.tambah')}}"
                class="bg-blue-500 rounded-xl text-white font-xl px-6 py-2 hover:bg-blue-400">
                Tambah data
            </a>
        </div>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>guru</th>
                                    <th>Mapel</th>
                                    <th>type</th>
                                    <th>kelas</th>
                                    <th>rombel</th>
                                    <th>alokasi jp</th>
                                    <th>total jp</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($riwayat as $d)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $d->guru->nama }}</td>
                                        <td>{{ $d->mataPelajaran->nama_mapel}}</td>
                                        <td>{{ $d->type }}</td>
                                        <td>{{ $d->kelas }}</td>
                                        <td>{{ $d->rombel }}</td>
                                        <td>{{ $d->alokasi_jp }}</td>
                                        <td>{{ $d->total_jp }}</td>
                                        <td>
                                            <form action="{{route('riwayatgenap.hapus', $d->id)}}">
                                                <a href="{{route('riwayatgenap.ubah', $d->id)}}">
                                                    Edit
                                                </a>
                                                <button>
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- Repeat rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection