@extends('layout.main')
@section('isi')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper h-[calc(100vh-4rem)] overflow-y-auto bg-gray-200">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <h3 class="m-0 content-title text-xl text-red-950 font-semibold">Data Guru</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->
    <section class="content ">
        <div class="flex w-full h-16 justify-end items-center px-4">
            <a href="{{route('guru.tambah')}}"
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
                                    <th>Nip</th>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($guru as $d)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $d->nip }}</td>
                                        <td>{{ $d->nama }}</td>
                                        <td>
                                            <form action="{{route('guru.hapus', $d->nip)}}">
                                                <a href="{{route('guru.ubah', $d->nip)}}">
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