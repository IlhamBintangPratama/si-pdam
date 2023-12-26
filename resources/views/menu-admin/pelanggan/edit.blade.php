@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Data Pelanggan</h1>
        <br>

        <!-- DataTales Example -->
        
        <div class="card shadow">
            <div class="card-header py-4">
                {{-- <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pelanggan</h6> --}}
                

                <form method="post" action="{{ url('/menu-admin/pelanggan/'.$pelanggan->id.'/update') }}" name="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{-- <fieldset > --}}
                        {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
                        <div class="mb-3">
                            <label for="nama">Nama Lengkap</label>
                            <input class="form-control @error('nama')
                                is-invalid
                                @enderror" id="nama" value="{{ old('name', $pelanggan->nama) }}" name="nama" type="text"  placeholder="Masukan nama lengkap">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                          
                        </div>
                        
                        <div class="mb-3">
                            <label for="email">Email Address</label>
                            <input class="form-control @error('email')
                                is-invalid
                                @enderror" id="email" value="{{ old('name', $pelanggan->email) }}" name="email" type="email"  placeholder="Masukan email address">
                                @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="foto">Foto</label>
                            <input class="form-control @error('foto')
                                is-invalid
                                @enderror" id="foto" value="{{ old('name', $pelanggan->foto) }}" name="foto" type="file" >
                                <img src="/galeri/{{ $pelanggan->foto }}" width="150px">
                                @error('foto')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="no_rekening_air">No Rekening Air</label>
                            <input class="form-control @error('no_rekening_air')
                            is-invalid
                            @enderror" id="no_rekening_air" value="{{ old('name', $pelanggan->no_rekening_air) }}" name="no_rekening_air" type="number" placeholder="Masukan nomor rekening air">
                            @error('no_rekening_air')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="kecamatan">Kecamatan</label>
                            <input class="form-control @error('kecamatan')
                                is-invalid
                                @enderror" id="kecamatan" value="{{ old('name', $pelanggan->kecamatan->nama_kecamatan) }}" name="kecamatan" type="text"  placeholder="Masukan nama kecamatan">
                                @error('kecamatan')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="desa">Desa/Kelurahan</label>
                            <input class="form-control @error('desa')
                                is-invalid
                                @enderror" id="desa" value="{{ old('name', $pelanggan->desa->nama_desa) }}" name="desa" type="text"  placeholder="Masukan nama desa">
                                @error('desa')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="password">Password</label>
                            <input class="form-control @error('password')
                            is-invalid
                            @enderror" id="password" value="{{old('password')}}" name="password" type="password" >
                            @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div> --}}
                        <div>
                            <button type="submit" class="btn btn-primary w-100 mb-2">Simpan</button>
                            <button type="button" id="back" class="btn btn-secondary w-100">Kembali</button>
                        </div>
                    {{-- </fieldset> --}}
                </form>
                <script>
                    document.getElementById('back').onclick = function(){
                        location.href = "{{ url('menu-admin/pelanggan') }}";
                    }
                </script>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection