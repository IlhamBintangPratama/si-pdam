@extends('layouts-user.main')

@section('title', 'Pengaduan')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Pengaduan</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Pengaduan</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
<section id="contact" class="contact">
    <div class="container">
        <div class="card shadow-sm bg-body rounded">
            <div class="card-body">
                <div class="col-lg-8 mt-5 mt-lg-0 mx-lg-auto">
                    <h6 class="fw-bold mb-4">Silahkan Lengkapi Data Pengaduan !!</h6>
                    <form action="{{url('send-pengaduan')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row mb-3">
                            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('nama')
                                is-invalid
                                @enderror" id="inputNama" name="nama">
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('alamat')
                                is-invalid
                                @enderror" id=" inputAlamat" rows="4" name="alamat"></textarea>
                                @error('alamat')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="formFile" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <input class="form-control @error('foto')
                                is-invalid
                                @enderror" type="file" id="formFile" name="foto">
                                @error('foto')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputAduan" class="col-sm-2 col-form-label">Pengaduan</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('keluhan')
                                is-invalid
                                @enderror" id=" inputAduan" rows="5" name="keluhan"></textarea>
                                @error('keluhan')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Kirim Pengaduan</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section><!-- End Contact Section -->
@endsection