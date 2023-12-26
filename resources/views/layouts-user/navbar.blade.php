<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <!-- <h1 class="logo me-auto"><a href="index.html">Sailor</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{ url('/') }}" class="logo me-auto"><img src="{{asset('Sailor')}}/assets/img/logo.jpg" alt="" class="img-fluid">Tirta Baribis</a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ url('/') }}" class="active">Home</a></li>

                <!-- <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>

                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> -->
                <li><a href="{{ url('tentangkami') }}">Tentang Kami</a></li>
                <li><a href="{{ url('berita') }}">Berita</a></li>
                <li><a href="{{ url('pengaduan') }}">Pengaduan</a></li>
                <li><a href="{{ url('pasang') }}">Pasang Baru</a></li>
                <!-- <li><a href="contact.html">Contact</a></li> -->
                <li><a href="{{ url('pengajuan') }}" class="getstarted">Pengajuan</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>