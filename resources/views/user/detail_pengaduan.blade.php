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
        <div class="card shadow-sm bg-body rounded">
            <div class="card-body">
                <div class="col-lg-8 mt-5 mt-lg-0 mx-lg-auto">
                    <h6 class="fw-bold mb-4">Silahkan Lengkapi Data Pengaduan !!</h6>
                    <form action="{{url('send-pengaduan')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_pelanggan" value="{{$pengaduan->id}}">
                        <input type="hidden" name="nama" value="{{$pengaduan->nama}}">
                        <!-- <input type="hidden" name="alamat" value="{{$pengaduan->alamat}}"> -->
                        <div class="row mb-3">
                            <label for="inputNama" class="col-sm-2 col-form-label">No Pelanggan</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputNama" name="no_rekening_air" value="{{$pengaduan->no_rekening_air}}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputNama" name="nama" value="{{$pengaduan->nama}}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('alamat')
                                is-invalid
                                @enderror" id="inputAlamat" name="alamat" style="resize: none;" placeholder="Jalan, No, Rt dan Rw"></textarea>
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
                        <div class="row mb-3">
                            <label for="inputTema" class="col-sm-2 col-form-label">Tema Pengaduan</label>
                            <div class="col-sm-10">
                                <select name="tema" id="" class="form-select @error('tema')
                                is-invalid
                                @enderror">
                                    <option value="">~Pilih Tema Pengaduan~</option>
                                    <option value="Kerusakan">Kerusakan</option>
                                    <option value="Operasional">Operasional</option>
                                    <option value="Kualitas Air">Kualitas Air</option>
                                </select>
                                @error('tema')
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
                                @enderror" id=" inputAduan" rows="5" name="keluhan" placeholder="Silahkan jelaskan keluhan PDAM Anda"></textarea>
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