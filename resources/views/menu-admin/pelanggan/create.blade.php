@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Pelanggan</h1>
        <br>

        <!-- DataTales Example -->
        
        <div class="card shadow">
            <div class="card-header py-4">
                {{-- <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pelanggan</h6> --}}
                

                <form method="post" action="{{ url('menu-admin/pelanggan') }}" name="post" enctype="multipart/form-data">
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
                                @enderror" id="nama" value="{{old('nama')}}" name="nama" type="text"  placeholder="Masukan nama lengkap">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                          
                        </div>
                        <div class="mb-3">
                            <label for="no_telp">No Telp</label>
                            <input class="form-control @error('no_telp')
                                is-invalid
                                @enderror" id="no_telp" value="{{old('no_telp')}}" name="no_telp" type="number"  placeholder="Masukan nomor telepon">
                                @error('no_telp')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email">Email Address</label>
                            <input class="form-control @error('email')
                                is-invalid
                                @enderror" id="email" value="{{old('email')}}" name="email" type="email"  placeholder="Masukan email address">
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
                                @enderror" id="foto" value="{{old('foto')}}" name="foto" type="file" >
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
                            @enderror" id="no_rekening_air" value="{{old('no_rekening_air')}}" name="no_rekening_air" type="number" placeholder="Masukan nomor rekening air">
                            @error('no_rekening_air')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat">Alamat</label>
                            <input class="form-control @error('alamat')
                                is-invalid
                                @enderror" id="alamat" value="{{old('alamat')}}" name="alamat" type="text"  placeholder="Masukan alamat">
                                @error('alamat')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="username">Username</label>
                            <input class="form-control @error('username')
                            is-invalid
                            @enderror" id="username" value="{{old('username')}}" name="username" type="text" >
                            @error('username')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input class="form-control @error('password')
                            is-invalid
                            @enderror" id="password" value="{{old('password')}}" name="password" type="password" >
                            @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
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