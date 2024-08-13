@extends('layouts-user.main')

@section('title', 'Tagihan')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Cek Tagihan</h2>
            <ol>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>Detail Tagihan</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
<section id="contact" class="contact">
    <div class="container">
        @if ($tagihan == null)
        <div class="card bg-danger text-white">
            <h5 class="card-header">Data Tagihan</h5>
            <div class="card-body">
                <h5 class="card-title">Maaf, No Rekening Tidak Terdaftar</h5>
                <p class="card-text">silahkan masukan nomor rekening air anda dengan benar</p>
                <a href="{{url('/')}}" class="btn btn-light">Kembali</a>
            </div>
        </div>
        @elseif ($tagihan->status == 1)
        <div class="card bg-info text-white">
            <h5 class="card-header">Data Tagihan</h5>
            <div class="card-body">
                <h5 class="card-title">Tagihan Anda Sudah Lunas</h5>
                <a href="{{url('/')}}" class="btn btn-light">Kembali</a>
            </div>
        </div>
        @else
        <div class="card shadow-sm text-dark bg-light mb-3">
            <div class="card-header">Tagihan Anda Bulan Ini</div>
            <div class="card-body">
                <p class="card-text">
                <dl class="row">
                    <dt class="col-sm-2">No Rekening Air</dt>
                    <dt class="col-sm-1">:</dt>
                    <dd class="col-sm-9">{{$tagihan->no_rekening_air}}</dd>

                    <dt class="col-sm-2">Nama Pelanggan</dt>
                    <dt class="col-sm-1">:</dt>
                    <dd class="col-sm-9">{{ $tagihan->nama }}</dd>

                    <dt class="col-sm-2">Jumlah Tagihan</dt>
                    <dt class="col-sm-1">:</dt>
                    <dd class="col-sm-9">Rp.{{ number_format($tagihan->jumlah_tagihan, 2) }}</dd>

                </dl>
                </p>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection