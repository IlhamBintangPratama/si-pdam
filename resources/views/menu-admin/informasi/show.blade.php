@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Detail Data Informasi</h1>
        <br>

        <!-- DataTales Example -->
        
        <div class="card shadow mb-4">
            <div class="card-header py-4">
                {{-- <h6 class="m-0 font-weight-bold text-primary">Tambah Data Informasi</h6> --}}
                <h6 class="m-0 font-weight-bold text-primary">Detail Data Informasi</h6>
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
                                <td style="width: 20%">Judul</td>
                                <td>{{ $informasi->judul }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20%">Isi Informasi</td>
                                <td style="white-space: pre-line;">{{ $informasi->isi_informasi }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20%">Foto</td>
                                <td><img src="/galeri/informasi/{{ $informasi->foto }}" width="150px"></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

                <script>
                    document.getElementById('back').onclick = function(){
                        location.href = "{{ url('menu-admin/informasi') }}";
                    }
                </script>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection