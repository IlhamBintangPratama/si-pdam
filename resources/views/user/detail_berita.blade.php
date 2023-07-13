@extends('layouts-user.main')
@section('title', 'Detail Berita')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Berita</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Berita</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
<!-- ======= Blog Single Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-12 entries">

                <article class="entry entry-single">

                    <div class="">
                        <img src="{{asset('galeri/informasi/'. $berita->foto)}}" alt="" class="mx-auto d-block mb-3">
                    </div>

                    <h2 class="entry-title">
                        <a href="#">{{$berita->judul }}</a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Administrator</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="<?= $berita->created_at; ?>"><?= $berita->created_at; ?></time></a>
                            </li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p class="text-justify">
                            {{ $berita->isi_informasi }}
                        </p>
                    </div>

                    <div class="entry-footer">
                        <i class="bi bi-folder"></i>
                        <ul class="cats">
                            <li><a href="#">Berita</a></li>
                        </ul>

                        <i class="bi bi-tags"></i>
                        <ul class="tags">
                            <li><a href="#">PDAM</a></li>
                            <li><a href="#">Brebes</a></li>
                            <li><a href="#">Informasi</a></li>
                        </ul>
                    </div>

                </article><!-- End blog entry -->

            </div><!-- End blog entries list -->

        </div>

    </div>
</section><!-- End Blog Single Section -->
@endsection