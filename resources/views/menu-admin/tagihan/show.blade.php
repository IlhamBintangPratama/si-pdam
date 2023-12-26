@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Detail Data Tagihan Pelanggan</h1>
        <br>

        <!-- DataTales Example -->
        
        <div class="card shadow mb-4">
            <div class="card-header py-4">
                {{-- <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pelanggan</h6> --}}
                <h6 class="m-0 font-weight-bold text-primary">Detail Data Tagihan Pelanggan</h6>
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
                                <td style="width: 20%">No Rekening Air</td>
                                <td>: {{ $tagihan->no_rekening_air }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20%">Nama</td>
                                <td>: {{ $tagihan->nama }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20%">Alamat</td>
                                <td>: {{ $tagihan->alamat }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20%">Jumlah Tagihan</td>
                                <td>: Rp.{{number_format($tagihan->jumlah_tagihan)}}</td>
                            </tr>

                            <tr>
                                <td style="width: 20%">Status Pembayaran</td>
                                <style>
                                    .badge-dot{
                                        border-radius: 5px;
                                        width: 10px;
                                        height: 10px;
                                    }
                                </style>
                                <td>:
                                <span class="status">{{($tagihan->status == 1) ? 'Selesai' : 'Belum Selesai'}}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <script>
                    document.getElementById('back').onclick = function(){
                        location.href = "{{ url('menu-admin/tagihan') }}";
                    }
                </script>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection