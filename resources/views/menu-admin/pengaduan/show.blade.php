@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Detail Data Pengaduan</h1>
        <br>

        <!-- DataTales Example -->
        
        <div class="card shadow mb-4">
            <div class="card-header py-4">
                {{-- <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pelanggan</h6> --}}
                <h6 class="m-0 font-weight-bold text-primary">Detail Data Pengaduan</h6>
                <a id="back" class="btn btn-secondary btn-icon-split" style="float: right;">
                    <span class="icon text-white-50">
                        {{-- <i class="fas fa-plus"></i> --}}<<
                    </span>
                    <span class="text">Kembali</span>
                </a>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td style="width: 20%">ID Pengaduan</td>
                                <td>{{ $pengaduan->id_pelanggan }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20%">Nama Lengkap</td>
                                <td>{{ $pengaduan->nama }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20%">Alamat</td>
                                <td>{{ $pengaduan->alamat }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20%">Foto</td>
                                <td><img src="/galeri/pengaduan/{{ $pengaduan->foto }}" width="150px"></td>
                            </tr>
                            <tr>
                                <td style="width: 20%">Keluhan</td>
                                <td>{{ $pengaduan->keluhan }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20%"> Tanggal</td>
                                <td>{{ $pengaduan->created_at->format('d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20%"> Status</td>
                                <td>
                                    <style>
                                        .badge-dot{
                                            border-radius: 5px;
                                            width: 10px;
                                            height: 10px;
                                        }
                                    </style>
                                    @if ($pengaduan->status == 0)
                                        <span class="badge badge-dot bg-primary"><i class="bg-primary"></i></span>
                                        <span class="status">Baru</span>
                                        
                                    @else
                                        <span class="badge badge-dot {{($pengaduan->status == 2) ?
                                            'bg-success' : 'bg-warning'}}"><i class="{{($pengaduan->status == 2) ?
                                            'bg-success' : 'bg-warning'}}"></i></span>
                                        <span class="status">{{($pengaduan->status == 2) ? 'Selesai' : 'Proses'}}</span>
                                        
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <script>
                    document.getElementById('back').onclick = function(){
                        location.href = "{{ url('menu-admin/pengaduan') }}";
                    }
                </script>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection