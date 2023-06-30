@extends('layouts-user.main')

@section('title', 'Home')
<!-- ======= Hero Section Carousel ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(Sailor/assets/img/slide/slide-1.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Sailor</span></h2>
                        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                            aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                            mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                            vel. Minus et tempore modi architecto.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                            More</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(Sailor/assets/img/slide/slide-2.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                            aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                            mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                            vel. Minus et tempore modi architecto.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                            More</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(Sailor/assets/img/slide/slide-3.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                            aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                            mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                            vel. Minus et tempore modi architecto.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                            More</a>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section>
<!-- End Hero -->
@section('content')
<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="icon-box">
                    <i class="bi bi-house-door"></i>
                    <h4><a href="#">Tentang Kami</a></h4>
                    <p>Informasi Profil Tirta Baribis Brebes</p>
                </div>
            </div>
            <div class="col-md-3 mt-4 mt-md-0">
                <div class="icon-box">
                    <i class="bi bi-newspaper"></i>
                    <h4><a href="#">Berita</a></h4>
                    <p>Informasi Berita Terkini</p>
                </div>
            </div>
            <div class="col-md-3 mt-4 mt-md-0">
                <div class="icon-box">
                    <i class="bi bi-bookmark-plus-fill"></i>
                    <h4><a href="#">Pengaduan</a></h4>
                    <p>Forum Pengaduan Pelanggan PDAM</p>
                </div>
            </div>
            <div class="col-md-3 mt-4 mt-md-0">
                <div class="icon-box">
                    <i class="bi bi-info-circle"></i>
                    <h4><a href="#">Pasang Baru</a></h4>
                    <p>Informasi Cara Pasang Baru</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Services Section -->
<div class="container">
    <div class="section-title">
        <h2>News</h2>
        <p>Berita Terbaru</p>
    </div>
</div>
<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-6 entries">
                <article class="entry">
                    <div class="entry-img">
                        <img src="{{asset('Sailor')}}/assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                    </div>
                    <h2 class="entry-title">
                        <a href="blog-single.html">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam
                            quia</a>
                    </h2>
                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                    href="blog-single.html">John Doe</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                    href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                    href="blog-single.html">12 Comments</a></li>
                        </ul>
                    </div>
                    <div class="entry-content">
                        <p>
                            Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium.
                            Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                            Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum
                            et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                        </p>
                        <div class="read-more">
                            <a href="blog-single.html">Read More</a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-6 entries">
                <article class="entry">
                    <div class="entry-img">
                        <img src="{{asset('Sailor')}}/assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                    </div>
                    <h2 class="entry-title">
                        <a href="blog-single.html">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam
                            quia</a>
                    </h2>
                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                    href="blog-single.html">John Doe</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                    href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                    href="blog-single.html">12 Comments</a></li>
                        </ul>
                    </div>
                    <div class="entry-content">
                        <p>
                            Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium.
                            Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                            Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum
                            et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                        </p>
                        <div class="read-more">
                            <a href="blog-single.html">Read More</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<!-- End blog entry -->
@endsection