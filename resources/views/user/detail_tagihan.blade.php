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
        <div class="card shadow-sm text-dark bg-light mb-3">
            <div class="card-header">Tagihan Anda Bulan Ini</div>
            <div class="card-body">
                <p class="card-text">
                <dl class="row">
                    <dt class="col-sm-2">No Rekening Air</dt>
                    <dt class="col-sm-1">:</dt>
                    <dd class="col-sm-9">{{$tagihan->no_pelanggan}}</dd>

                    <dt class="col-sm-2">Nama Pelanggan</dt>
                    <dt class="col-sm-1">:</dt>
                    <dd class="col-sm-9">{{ $tagihan->nama }}</dd>

                    <dt class="col-sm-2">Jumlah Tagihan</dt>
                    <dt class="col-sm-1">:</dt>
                    <dd class="col-sm-9">{{ $tagihan->jumlah_tagihan }}</dd>

                </dl>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection