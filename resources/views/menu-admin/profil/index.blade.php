@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Profil</h1>
        <br>

        <!-- DataTales Example -->
        
        <div class="card shadow mb-4">
            <div class="card-header py-4">
                {{-- <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pelanggan</h6> --}}
                <h6 class="m-0 font-weight-bold text-primary">Data Profil</h6>
                <a href="{{ url('/menu-admin/profil/'.$profil->id.'/edit') }}" class="btn btn-primary btn-icon-split" style="float: right;">
                    <span class="icon text-white-50">
                        {{-- <i class="fas fa-plus"></i> --}}
                        <i class="fa fa-edit"></i>
                    </span>
                    <span class="text">Ubah Profil</span>
                </a>
                <div>
                    <img src="" alt="">
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td style="width: 20%">Profil Perusahaan</td>
                                <td>: {{ $profil->profil }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20%">Facebook</td>
                                <td>: {{ $profil->facebook }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20%">Instagram</td>
                                <td>: {{ $profil->instagram }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20%">No Telp</td>
                                <td>: 0{{ $profil->no_telp }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20%">Email</td>
                                <td>: {{ $profil->email }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20%">Alamat</td>
                                <td>: {{ $profil->alamat }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20%">Visi</td>
                                <td>: {{ $profil->visi }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20%;">Misi</td>
                                <td>: {{$profil->misi}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection