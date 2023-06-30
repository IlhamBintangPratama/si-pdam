<!DOCTYPE html>
<html lang="en">
<!-- header -->
@include('layouts-user.header')

<body>

    <!-- ======= Header ======= -->
    <!-- navbar -->
    @include('layouts-user.navbar')
    <!-- End Header -->

    <main id="main">

        <!-- content -->
        @yield('content')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layouts-user.footer')