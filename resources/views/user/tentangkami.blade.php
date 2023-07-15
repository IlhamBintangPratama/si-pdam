@extends('layouts-user.main')

@section('title', 'Tentang Kami')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Tentang Kami</h2>
            <ol>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>Tentang Kami</li>
            </ol>
        </div>
    </div>
</section><!-- End Breadcrumbs -->
<!-- ======= About Section ======= -->
<section id="about" class="about mt-5 mb-5">
    <div class="container">
        <div class="row content">
            <div class="col-lg-4">
                <h2>Profil</h2>
                <h3>Tirta Baribis</h3>
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0">
                <p>
                    <?= $profil->profil; ?>
                </p>
                <!-- <ul>
                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                    <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit
                    </li>
                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in</li>
                </ul>
                <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore
                    magna aliqua.
                </p> -->
            </div>
        </div>
    </div>
</section><!-- End About Section -->
<!-- ======= Features Section ======= -->
<section id="features" class="features">
    <div class="container">

        <div class="section-title">
            <h2>About</h2>
            <p>Visi & Misi</p>
        </div>

        <div class="row">
            <div class="col-lg-2">
                <ul class="nav nav-tabs flex-column">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Visi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Misi</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-10 mt-4 mt-lg-0">
                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>Visi Tirta Baribis</h3>
                                <p class="fst-italic"><?= $profil->visi; ?></p>
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="{{asset('Sailor')}}/assets/img/features-1.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>Misi Tirta Baribis</h3>
                                <p class="fst-italic"><?= $profil->misi; ?></p>
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="{{asset('Sailor')}}/assets/img/features-2.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="section-title">
            <h2>About</h2>
            <p>Contact</p>
        </div>

        <div class="row">
            <div class="col-lg-2">
                <ul class="nav nav-tabs flex-column">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" href="#tab-3">Nomor Telepon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Email</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-10 mt-4 mt-lg-0">
                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-3">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>Nomor Telepon</h3>
                                <p class="fst-italic"><?= $profil->no_telp; ?></p>
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="{{asset('Sailor')}}/assets/img/features-1.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>Email</h3>
                                <p class="fst-italic"><?= $profil->email; ?></p>
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="{{asset('Sailor')}}/assets/img/features-2.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection