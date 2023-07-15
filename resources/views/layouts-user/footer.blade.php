<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3>Tirta Baribis</h3>
                        <p>
                            <strong>Alamat :</strong> <?= $profil->alamat; ?><br>
                            <strong>Whatsaap :</strong> <?= $profil->no_telp; ?><br>
                            <strong>Email :</strong> <?= $profil->email; ?><br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="<?= $profil->facebook; ?>" target="_blank" class="facebook"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="<?= $profil->instagram; ?>" target="_blank" class="instagram"><i
                                    class="bx bxl-instagram"></i></a>
                            <!-- <a href="" class="whatsaap"><i class="bx bxl-whatsapp"></i></a> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ url('tentangkami') }}">Tentang Kami</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ url('berita') }}">Berita</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ url('pengaduan') }}">Pengaduan</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ url('pasang') }}">Pasang Baru</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Tirta Baribis</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('Sailor')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('Sailor')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{asset('Sailor')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('Sailor')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('Sailor')}}/assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="{{asset('Sailor')}}/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('Sailor')}}/assets/js/main.js"></script>
<script>
setTimeout(function() {
    $('.alert').fadeOut('slow');
}, 3000);
</script>

</body>

</html>