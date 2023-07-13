@extends('layouts-user.main')

@section('title', 'Berita')

<style>
    .crop-text-2 {
        -webkit-line-clamp: 8;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-box-orient: vertical;
    }
</style>
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
<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>News</h2>
            <p>Berita</p>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @foreach ($berita as $data )
                    <div class="col-lg-6 entries">
                        <article class="entry">
                            <div class="entry-img">
                                <img src="{{asset('galeri/informasi/'. $data->foto)}}" alt="" class="img-fluid">
                            </div>
                            <h2 class="entry-title">
                                <a href="{{url('detail-berita/'. $data->id)}}">{{ $data->judul  }}</a>
                            </h2>
                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Administrator</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="<?= $data->created_at; ?>"><?= $data->created_at; ?></time></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p class="crop-text-2">
                                    {{ $data->isi_informasi }}
                                </p>
                                <div class="read-more">
                                    <a href="{{url('detail-berita/'. $data->id)}}">Read More</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>

                <!-- <div class="blog-pagination">
                    <ul class="justify-content-center">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div> -->
            </div>


            <div class="col-lg-4">
                <div class="sidebar">
                    <h3 class="sidebar-title">Search</h3>
                    <div class="sidebar-item search-form">
                        <form action="">
                            <input type="text">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div><!-- End sidebar search formn-->

                    <h3 class="sidebar-title">Recent Posts</h3>
                    <div class="sidebar-item recent-posts">
                        <div class="post-item clearfix">
                            <img src="{{asset('Sailor')}}/assets/img/blog/blog-recent-1.jpg" alt="">
                            <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="{{asset('Sailor')}}/assets/img/blog/blog-recent-2.jpg" alt="">
                            <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="{{asset('Sailor')}}/assets/img/blog/blog-recent-3.jpg" alt="">
                            <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="{{asset('Sailor')}}/assets/img/blog/blog-recent-4.jpg" alt="">
                            <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="{{asset('Sailor')}}/assets/img/blog/blog-recent-5.jpg" alt="">
                            <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>
                    </div><!-- End sidebar recent posts-->
                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->
        </div>
    </div>
</section>
<!-- End blog entry -->
@endsection