@extends('layouts-user.main')

@section('title', 'Pengajuan')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Pengajuan</h2>
            <ol>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>Pengajuan</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
<section id="contact" class="contact">
    <div class="container">
        <div class="card shadow-sm bg-body rounded">
            <div class="card-body">
                <div class="col-lg-8 mt-5 mt-lg-0 mx-lg-auto">
                    <h6 class="fw-bold mb-4">Silahkan Lengkapi Data Pengajuan !!</h6>
                    <form action="{{url('send-pengajuan')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input class="form-control @error('nama')
                                is-invalid
                                @enderror" id="inputNama" name="nama" value="">
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control @error('email')
                                is-invalid
                                @enderror" id="inputEmail" name="email" value="">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputAlamat" name="alamat" style="resize: none;" placeholder="Alamat Jalan,No,RT dan Rw"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputKecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                            <div class="col-sm-10">
                                <select name="kecamatan" id="" class="form-select">-Pilih Kecamatan-
                                    <option value="52012">Brebes</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputDesa" class="col-sm-2 col-form-label">Desa</label>
                            <div class="col-sm-10">
                                <select name="desa" id="" class="form-select">-Pilih Desa-</select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Kirim Pengajuan</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section><!-- End Contact Section -->

@endsection