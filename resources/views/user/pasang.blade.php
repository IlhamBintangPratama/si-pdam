@extends('layouts-user.main')

@section('title', 'Pasang Baru')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Pasang Baru</h2>
            <ol>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>Pasang Baru</li>
            </ol>
        </div>
    </div>
</section><!-- End Breadcrumbs -->
<section id="faq" class="faq">
    <div class="container">

        <div class="section-title">
            <h2>Pasang Baru</h2>
            <p>Cara Pemasangan PDAM Baru</p>
        </div>

        <div class="row faq-item d-flex align-items-stretch">
            <div class="col-lg-5">
                <i class="bx bx-help-circle"></i>
                <h4>Persyaratan Pemasangan PDAM Baru ?</h4>
            </div>
            <div class="col-lg-7">
                <p>
                    {!! $pasang->persyaratan !!}
                </p>
            </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch">
            <div class="col-lg-5">
                <i class="bx bx-help-circle"></i>
                <h4>Biaya Pemasangan PDAM Baru ?</h4>
            </div>
            <div class="col-lg-7">
                <p>
                    {!! $pasang->harga_pasang !!}
                </p>
            </div>
        </div><!-- End F.A.Q Item-->

    </div>
</section><!-- End Frequently Asked Questions Section -->
@endsection