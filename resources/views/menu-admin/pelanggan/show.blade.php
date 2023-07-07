@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Detail Data Pelanggan</h1>
        <br>

        <!-- DataTales Example -->
        
        <div class="card shadow mb-4">
            <div class="card-header py-4">
                {{-- <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pelanggan</h6> --}}
                <h6 class="m-0 font-weight-bold text-primary">Detail Data Pelanggan</h6>
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
                                <td style="width: 20%">Nama Lengkap</td>
                                <td>: {{ $pelanggan->nama }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20%">No Telp</td>
                                <td>: {{ $pelanggan->no_telp }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20%">Email</td>
                                <td>: {{ $pelanggan->email }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20%">Foto</td>
                                <td>: <img src="/galeri/{{ $pelanggan->foto }}" width="150px"></td>
                            </tr>
                            <tr>
                                <td style="width: 20%">No Rekening Air</td>
                                <td>: {{ $pelanggan->no_rekening_air }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20%">Alamat</td>
                                <td>: {{ $pelanggan->alamat }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20%">Username</td>
                                <td>: {{ $pelanggan->username }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <script>
                    document.getElementById('back').onclick = function(){
                        location.href = "{{ url('menu-admin/pelanggan') }}";
                    }
                </script>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection