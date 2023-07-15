@extends('layouts-user.main')

@section('title', 'Pengaduan')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Pengaduan</h2>
            <ol>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>Pengaduan</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
<section id="contact" class="contact">
    <div class="container">
        @if ($message = Session::get('created'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{$message}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="card shadow-sm bg-body rounded">
            <div class="card-body">
                <div class="col-lg-8 mt-5 mt-lg-0 mx-lg-auto">
                    <h6 class="fw-bold mb-4">Masukan No Pelanggan Terlebih Dahulu !!</h6>
                    <form action="{{url('cek-pengaduan')}}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputNama" class="col-sm-3 col-form-label">No Pelanggan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('no_pelanggan')
                                is-invalid
                                @enderror" id="inputNama" name="no_pelanggan">
                                @error('no_pelanggan')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Lakukan Pengaduan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Contact Section -->

@endsection