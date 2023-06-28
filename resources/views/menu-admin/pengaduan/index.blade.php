@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Pengaduan</h1>
        <br>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
                {{-- <a href="#" class="btn btn-primary btn-icon-split" style="float: right;">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Data</span>
                </a> --}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Foto</th>
                                <th>Keluhan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        
                        <tbody class="list">
                            @foreach($pengaduan as $no => $item)
                            <tr>
                            <td>{{ $pengaduan->firstItem()+$no}}</td>
                            <th scope="row">
                                <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="name mb-0 text-sm">{{ $item->nama }}</span>
                                </div>
                                </div>
                            </th>
                            
                            <td class="budget">
                                {{ $item->alamat }}
                            </td>
                            <td class="budget">
                                {{ $item->foto }}
                            </td>
                            <td class="budget">
                                {{ $item->keluhan }}
                            </td>
                            <td>  
                                <a href="{{ url('/menu-admin/pengaduan/'.$item->id.'/edit') }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="{{ url('/menu-admin/pengaduan/'.$item->id.'/show') }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                            </tr>
                            @endforeach
                            </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end mb-0">
                        {{ $pengaduan->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection