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
        @if ($message = Session::get('created'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{$message}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
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
                                @enderror" id="inputNama" name="nama" value="{{old('nama')}}">
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
                                @enderror" id="inputEmail" name="email" value="{{old('email')}}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputTelp" class="col-sm-2 col-form-label">No Telphone</label>
                            <div class="col-sm-10">
                                <input class="form-control @error('no_telp')
                                is-invalid
                                @enderror" id="inputTelp" name="no_telp" value="{{old('no_telp')}}">
                                @error('no_telp')
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
                                @enderror" id="inputAlamat" name="alamat" style="resize: none;" placeholder="Alamat Jalan,No,RT dan Rw">{{old('alamat')}}</textarea>
                                @error('alamat')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputKecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                            <div class="col-sm-10">
                                <select name="kecamatan" id="" class="form-select @error('kecamatan')
                                is-invalid
                                @enderror">
                                    <option value="">~Pilih Kecamatan~</option>
                                    @foreach ($kec as $data)
                                    <option value="{{$data->id}}">{{$data->nama_kecamatan}}</option>
                                    @endforeach
                                </select>
                                @error('kecamatan')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputDesa" class="col-sm-2 col-form-label">Desa</label>
                            <div class="col-sm-10">
                                <select name="desa" id="" class="form-select @error('desa')
                                is-invalid
                                @enderror" onmousedown="if(this.options.length>5){this.size=5;}" onchange='this.size=0;' onblur="this.size=0;">
                                    <option value="">~Pilih Desa~</option>
                                    @foreach ($desa as $data)
                                    <option value="{{$data->id}}">{{$data->nama_desa}}</option>
                                    @endforeach
                                </select>
                                @error('desa')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
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